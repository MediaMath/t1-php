## Customisation <a name="customisation"></a>

- [Authenticators](#authenticators)
- [HTTP Transport](#transport)
- [Response Decoders](#decoders)
- [Response Cache](#cache)

### Authenticators <a name="authenticators"></a>

If you want to provide your own authenticator class you will need to implement either the `CookieAuthenticable` or `OAuthAuthenticable` interface, depending on if you wish to pass a T1 session_id for cookie authentication or an access token for OAuth authentication with your requests.

#### Example custom cookie authenticator

You are welcome to use the `AdamaCookieAuth` class provided in this SDK. However, if you wish to write your own, your cookie authenticator needs to accept a session id in its constructor. If you want to use the provided Guzzle HTTP transport, your `cookieValues()` method needs to return an array with the key 'adama_session'. Your `authUniqueId()` method needs to return a unique identifier. In this case just the `session_id` parameter is sufficient.

```php
namespace Acme;

use MediaMath\TerminalOneAPI\Infrastructure\CookieAuthenticable;

class AcmeCookieAuth implements CookieAuthenticable
{

    private $session_id;

    public function __construct($session_id)
    {
        $this->session_id = $session_id;
    }

    public function cookieValues()
    {
        return ['adama_session' => $this->session_id];
    }
    
    public function authUniqueId()
    {
        return $this->session_id;
    }

}
```


#### Example custom OAuth authenticator

You are welcome to use the `OAuthAuth` class provided in this SDK. However, if you wish to write your own, your OAuth authenticator needs to accept an API key and a token in its constructor. If you want to use the provided Guzzle HTTP transport, your `headers()` and `queryStringParams()` methods need to return arrays with the keys / values as shown. Your `authUniqueId()` method needs to return a unique identifier. In this case a concatenation of the `api_key` and `token` parameters is sufficient.

```php
namespace Acme;

use MediaMath\TerminalOneAPI\Infrastructure\OAuthAuthenticable;

class AcmeOAuthAuth implements OAuthAuthenticable
{

    private $api_key, $token;

    public function __construct($api_key, $token)
    {
        $this->api_key = $api_key;
        $this->token = $token;
    }

    public function headers()
    {
        return ['Authorization' => 'Bearer ' . $this->token];
    }

    public function queryStringParams()
    {
        return ['api_key' => $this->api_key];
    }
    
    public function authUniqueId()
    {
        return $this->api_key . $this->token;
    }

}
```

### HTTP Transport <a name="transport"></a>

You are welcome to use the `GuzzleTransporter` class provided in this SDK. However, if you wish to write your own your transport class needs to implement the `transportable` interface and your `__construct()` method accept an instance of `Authenticable`, which will be either an OAuth or session cookie authenticator.

Depending on which authentication method you use (OAuth or session cookie) you will either need to set an HTTP 'Authorization' header and add the API key to the query string, or you will need to set an 'adama_session' cookie in the request, containing your session id.  

```php
namespace Acme;

use MediaMath\TerminalOneAPI\Infrastructure\Transportable;
use MediaMath\TerminalOneAPI\Infrastructure\Authenticable;

class AcmeTransporter implements Transportable
{

    private $curl, $authenticator;

    public function __construct(Authenticable $authenticator)
    {
        $this->authenticator = $authenticator;
        $this->curl = curl_init();
    }

    public function read($url, $options)
    {
    
        if(count($options) > 0) {
            // ... do some PHP stuff here to append the options array to the query string
        }

        /**
        * If this request is authenticated with a session ID it must be 
        * added to the request as a cookie
        */

        if ($this->authenticator instanceof CookieAuthenticable) {
            $tmp = [];
            foreach($this->authenticator->cookieValues() AS $key => $value) {
                $tmp[] = $key . '=' . $value;
            }
            curl_setopt($this->curl, CURLOPT_COOKIE, implode('; ', $tmp));    
        }
        
        
        /**
        * If this request is authenticated with OAuth we need to add the
        * Authorization header and add the api key to the query string
        */
        if ($this->authenticator instanceof OAuthAuthenticable) {

            $auth_headers = $this->authenticator->headers();
            
            $headers = [
                'Accept: application/vnd.mediamath.v1+json',
                'Authorization: ' . $auth_headers['Authorization'];                        
            ];
            
            curl_setopt($this->curl, CURLOPT_HTTPHEADER, $headers);
            
            $params = $this->authenticator->queryStringParams();

            $url .= '&api_key=' . $params['api_key'];

        }
        
        curl_setopt($this->curl, CURLOPT_URL, $url);
        
        return curl_exec($this->curl);

    }

    public function create($url, $data)
    {
        // TODO: add your own object creation logic here
    }

    public function update($url, $data)
    {
        // TODO: add your own object update logic here
    }
    
    public function authUniqueId()
    {
        return $this->authenticator->authUniqueId();
    }

}
``` 

### Response Decoders <a name="decoders"></a>

You are welcome to use the various response decoder classes provided in this SDK. However, if you wish to write your own, your decoder class needs to implement the `Decodable` interface, and your `decode()` method must accept the API response provided by the HTTP transport and should return an instance of `ApiResponse`.

```php
namespace Acme;

use MediaMath\TerminalOneAPI\Infrastructure\ApiResponse;
use MediaMath\TerminalOneAPI\Infrastructure\ApiResponseMeta;
use MediaMath\TerminalOneAPI\Infrastructure\Decodable;

class AcmeJSONResponseDecoder implements Decodable
{
    public function decode($api_response)
    {

        /**
         * After json_decode(), $response will be an array of:
         * $response = [
         *      'data' => [ entities... ]
         *      'meta' => [ information about the response... ]
         * ];
         */
        $response = json_decode($api_response, true); 
        
        /**
        * Make all array keys of the data uppercase
        */
        return new ApiResponse(
            ApiResponseMeta($response['meta']),
            array_change_key_case($response['data'], CASE_UPPER)
        );
    }

}
```

### Response Cache <a name="cache"></a>

You are welcome to use the Doctrine response cache classes provided in this SDK. However, if you wish to write your own, your cache class will need to implement the `Cacheable` interface.

```php
// example using the Laravel Cache singleton class and the Laravel Carbon singleton class

namespace Acme;

use MediaMath\TerminalOneAPI\Infrastructure\Cacheable;
use \Cache;
use \Carbon;

class AcmeCache implements Cacheable {
    
    private $ttl;
    
    public function __construct($ttl) {
    
        $this->ttl = $ttl;
    
    }
    
    public function store($key, $data)
    {
        $expiresAt = Carbon::now()->addSeconds($ttl);
        
        Cache::put($key, $data, $expiresAt);
    
    }
    
    public function retrieve($key)
    {
    
        if(Cache::has($key)) {
            return Cache::get($key);
        }
    
        return null;
    
    }

}
```

```php
use Acme\AcmeCache;
use MediaMath\TerminalOneAPI\CachingApiClient;
use MediaMath\TerminalOneAPI\Decoder\JSONResponseDecoder;
use MediaMath\TerminalOneAPI\Management;

$cached_json = new CachingApiClient($transport, new AcmeCache(600), new JSONResponseDecoder());

$data = $cached_json->read(new Management\Vertical());
```