# open_t1_php_sdk

## Extensible and customisable PHP SDK for interacting with the T1 API

- Supports adama session cookie authentication out of the box
- Supports OAuth authentication out of the box
- Authentication is fully customisable
- Can convert CSV, XML & JSON API responses to PHP objects & arrays out of the box
- Response decoding is fully customisable
- HTTP transport is fully customisable (Guzzle HTTP transport included)
- Can cache API responses
- API response cache is fully customisable (Doctrine cache included)

## Installation

This is a private repository not listed on packagist, so you will need to configure the repository in your composer.json yourself:

	{
		...,
		"repositories": [
			{
				"type": "vcs",
				"url": "git://github.com/MediaMath/open_t1_php_sdk.git"
			}
		],
	}

And add MediaMath/open_t1_php_sdk to your requirements

	{
		...,
		"require": {
			...,
			"MediaMath/open_t1_php_sdk": "*"
		}
	}

Run composer install

	$ php composer.phar install

This SDK uses PSR-4 so classes and namespaces should be autoloaded in your application.

### Extra packages

If you want to use the Guzzle HTTP transport class provided in this SDK instead of writing your own, you will also need to install the Guzzle HTTP client library.

    $ php composer.phar require "guzzlehttp/guzzle"
    
If you want to use the Doctrine Api Response Cache class provided in this SDK instead of writing your own, you will also need to install the Doctrine Cache library.

    $ php composer.phar require "doctrine/cache"


## Usage <a name="usage"></a>

- [Overview](#usage-overview)
- [Setting up the SDK](#usage-setting-up)
- [Basic Read Requests](#usage-basic)
- [Passing Options](#usage-options)
- [Querying](#usage-querying)
- [Using limits](#usage-limits)
- [Fetching Single Objects](#usage-fetching)
- [Creating Objects](#usage-creating)
- [Updating Objects](#usage-updating)
- [Deleting Objects](#usage-deleting)
- [Decoding The Response](#usage-decoding)
- [Caching The Response](#usage-caching)
- [Pagination](#usage-pagination)

### Overview <a name="usage-overview"></a>

#### The SDK structure is as follows:

1. Authenticator - allows you to authenticate against the T1 API either using adama or OAuth
2. HTTP Transporter - choose how you want your network traffic to be handled, eg cURL, Guzzle, AMQP, or a mixture of options (such as AMQP for updating data, cURL for reading)
3. API Client - allows you to hook in any custom request / response logic and / or perform response caching
4. API Object class - holds information about each API endpoint
5. Decoder - allows you to format the API response in any way you wish

#### The SDK flow is as follows:

1. Choose an authentication method
2. Set up an HTTP transporter to use your authenticator
3. Set up an API Client. 
4. Make your API call by instantiating one of the provided API object classes with your API Client
5. Do something with the response (decode it, return a string representation, etc)
 
### Setting up the SDK <a name="usage-setting-up"></a>

To set up the SDK for making API calls you need to initialise an HTTP transport with your chosen authentication method. See [Customisation](#customisation) for instructions on creating your own authenticators, HTTP transports, response decoders, or response caching.

Apart from initialising the authenticator, the steps for getting a response from the API are the same, whether using OAuth or cookie authentication. In this example we use cookie authentication with a session_id supplied by T1.

```php
use Mediamath\TerminalOneAPI\Auth\AdamaCookieAuth;
use Mediamath\TerminalOneAPI\ApiClient;
use Mediamath\TerminalOneAPI\Transport\GuzzleTransporter;

/*
* See https://developer.mediamath.com/docs/read/terminalone_api_overview/Authentication
*/
$session_id = '911de80bcb86f239eaada55b55bfc548........';

/*
* Set up the authenticator
*/
$auth = new AdamaCookieAuth($session_id);

/*
* Set up the HTTP transport with the authenticator
*/
$transport = new GuzzleTransporter($auth);

/*
*  Initialise the API client
*/
$client = new ApiClient($transport);


/*
* Or use the one-line setup:
*/
$client = new ApiClient(new GuzzleTransporter(new AdamaCookieAuth($session_id)));
```

```php
use Mediamath\TerminalOneAPI\Auth\OAuthAuth;
use Mediamath\TerminalOneAPI\ApiClient;
use Mediamath\TerminalOneAPI\Transport\GuzzleTransporter;

/*
* See https://developer.mediamath.com/docs/read/terminalone_api_overview/Authentication
*/
$api_key = 'your application key';
$access_token = 'your access token';

/*
* Set up the authenticator
*/
$auth = new OAuthAuth($api_key, $access_token);

/*
* Set up the HTTP transport with the authenticator
*/
$transport = new GuzzleTransporter($auth);

/*
*  Initialise the API client
*/
$client = new ApiClient($transport);
```


### Basic read requests <a name="usage-basic"></a>

Depending on which T1 API you wish to call, either the Management API or the Reporting API, you will need to include the respective namespaces.

```php
use Mediamath\TerminalOneAPI\Management;

/*
* Fetch all the organisations which are available under the authorised account 
*/
$data = (new Management\Organization($client))->read();
```        
        
### Passing options to the API <a name="usage-options"></a>

To pass options to the API, add them as an associative array within the `read()` method on the API object class. Refer to the T1 API docs to find out what options are valid for each endpoint.

```php
use Mediamath\TerminalOneAPI\Management;

$data = (new Management\Advertiser($client))->read([
    'with' => 'agency',
    'sort_by' => 'name'
]);
```

```php
use Mediamath\TerminalOneAPI\Reporting;

$dimensions = array(
    'advertiser_id',
    'advertiser_name',
    'agency_id',
    'agency_name',
    'organization_id',
    'organization_name'
);

$data = (new Reporting\AudienceIndex($client))->read([
    'time_rollup' => 'all',
    'time_window' => 'last_14_days',
    'filter' => 'organization_id=......',
    'dimensions' => implode(',', $dimensions),
    'precision' => 2
]);
```

### Querying the API <a name="usage-querying"></a>

Refer to the T1 API docs for specific documentation on how to query the API. You can pass in your query string parameter via the `read()` method's options array. If you use the `GuzzleTransporter` HTTP transport class provided with this SDK there is no need to urlencode your query string.

```php
$data = (new Management\Campaign($client))->read([
    'q' => 'name==New Campaign'
]);
```

```php
$data = (new Management\Campaign($client))->read([
    'q' => '(123456,234567,345678)'
]);
```

### Using the LIMIT parameter <a name="usage-limits"></a>

The T1 API docs state that to limit results to objects belonging to a particular parent you should append `/limit/key=value` to your URI. In this SDK you pass the requirement as a parameter in the `read()` method's options array instead.

#### Limiting based upon a member property (eg: advertiser id)

```php
$data = (new Management\Campaign($client))->read([
    'limit' => 'advertiser=......'
]);
```

#### Limiting based upon hierarchical entities (eg advertiser.agency id)

```php
$data = (new Management\Campaign($client))->read([
    'limit' => 'advertiser.agency=......'
]);
```

#### Limiting based upon linked relationships (eg: vendor_contracts.vendor id)

```php
$data = (new Management\Campaign($client))->read([
    'limit' => 'vendor_contracts.vendor=...'
]);
```

### Fetching single objects <a name="usage-fetching"></a>

The feed endpoints `organizations/`, `agencies/`, `campaigns/`, etc do not fully hydrate the returned entities by default. In order to retrieve the complete data set you should fetch an object on its own. The T1 docs show this is done by making a call to `organizations/[id]`, for example.

If you pass an `'id'` parameter into the `read()` method's options array the SDK will automatically modify the URI and fetch the associated object for you.

```php
$data = (new Management\Organization($client))->read([
    'id' => ......,
]);
```

### Creating objects <a name="usage-creating"></a>

Each creatable object in the SDK contains a `create()` method to which you can pass the required parameters in an array. If you attempt to call `create()` on an object which does not have a creatable endpoint you will receive a PHP exception. Refer to the T1 API documentation for the required parameters for each object / endpoint.

```php
$strategy = (new Management\Strategy($client))->create([
    'campaign_id' => ......,
    'budget' => 3,
    'goal_type' => 'spend',
    'name' => 'T1 PHP SDK Strategy',
    'pacing_amount' => 0.5,
    'type' => 'AUD',
    'use_campaign_start' => 'on',
    'use_campaign_end' => 'on'
]);
```

### Updating objects <a name="usage-updating"></a>

### Deleting objects <a name="usage-deleting"></a>

Items cannot be deleted via the API. Please log in to T1 directly.

### Decoding the response <a name="usage-decoding"></a>

The SDK ships with a number of decoders for the API response. Some reporting API endpoints return CSV, some reporting API endpoints return JSON, and the management API can return XML or JSON. If you use the provided `GuzzleTransporter` the management API should always return JSON, but if you use your own custom HTTP transport class you are more likely to receive XML. 

By default the `ApiClient` class returns the API response 'as-is' without decoding into PHP objects or arrays. If you want an object or associative PHP array representation of the response, add an instance of the decoder you want to use. For API endpoints which return CSV, for example, you should inject a decoder which expects a CSV string, or a decoder which expects a JSON string when the expected API response is JSON.

Note: Using the `JSONResponseDecoder` will give you an object representation of the response, whereas using the `XMLResponseDecoder` will give you an associative PHP array.

By providing your own decoders you can move your response decoding / formatting logic away from your controllers or implement a more fine-grained control over the decoding process.

```php
use Mediamath\TerminalOneAPI\ApiClient;
use Mediamath\TerminalOneAPI\Management;
use Mediamath\TerminalOneAPI\Decoder\JSONResponseDecoder;

/*
*  Initialise the API client
*/
$json_client = new ApiClient($transport, new JSONResponseDecoder());

/*
* Fetch all the organisations which are available under the authorised account 
*/
$data = (new Management\Organization($json_client))->read();
// $data will now be a PHP object instead of a JSON-encoded string  
```

### Caching the response <a name="usage-caching"></a>

Caching API responses can greatly speed up certain areas of your application. This SDK ships with a number of cache options which all use the Doctrine Cache drivers. Included are:

- Filesystem cache
- APC*
- xCache*
- Memcache*
- Memcached*

*Note: To use the APC, xCache, Memcache, or Memcached caches you will need the relevant PHP extension installed and enabled in your PHP environment.

To use the caching API client you need to use the `CachingApiClient` instead of the `ApiClient` class. The `CachingApiClient` takes an extra required parameter, which is the type of cache you wish to use. You can either use one of the Doctrine cache classes provided or write your own.

All cache classes provided with this SDK require a TTL to be set in the constructor using the static TimePeriod named methods:
 
```php
$five_hours = TimePeriod::hours(5); // translates internally to 5 x 60 x 60 seconds.
$eight_minutes = TimePeriod::minutes(8); // translates internally to 8 x 60 seconds.
$ten_seconds = TimePeriod::seconds(10);
```

Additionally, the `DoctrineFilesystemCache` class provided with this SDK requires a filesystem path to be provided, which is where the cached objects will be stored.

The `CachingApiClient` only caches read requests. It does not cache creation or updating of API objects.

```php
use Mediamath\TerminalOneAPI\CachingApiClient;
use Mediamath\TerminalOneAPI\Decoder\JSONResponseDecoder;
use Mediamath\TerminalOneAPI\Cache\DoctrineFilesystemCache;
use Mediamath\TerminalOneAPI\Cache\TimePeriod;

/*
* Specify a path to the cache directory.
* In this case it is a Symfony 3 cache relative to the current controller but you could 
* use any writeable directory, Laravel cache directory, path set in global config, etc.
*/
$path = __DIR__ . '/../../../var/cache/api_requests/';

$cached_json = new CachingApiClient($transport, new DoctrineFilesystemCache(TimePeriod::hours(1), $path), new JSONResponseDecoder());

$data = (new Management\Vertical($cached_json))->read();
```

### Pagination <a name="usage-pagination"></a>

Some endpoints of the API contain a lot of data. If you explicitly use the `JSONResponseDecoder` or the `XMLResponseDecoder` decoders the `ApiClient` will automatically fetch all paginated entities if you pass the option `'fetch' => 'all'` to your `read()` method. If you use the `DefaultResponseDecoder` decoder, or supply your own decoder, you will be responsible for creating your own pagination logic.

```php
use Mediamath\TerminalOneAPI\Management;

/*
* Fetch all the campaigns which are available under the authorised account 
*/
$data = (new Management\Campaign($client))->read([
    'fetch' => 'all'
]);
``` 

Endpoints which contain a lot of paginated data, for example `Management\Campaigns`, work best when used in conjunction with a `CachingApiClient` instance. 
        
## Customisation <a name="customisation"></a>

- [Authenticators](#customisation-authenticators)
- [HTTP Transport](#customisation-transport)
- [Response Decoders](#customisation-decoders)
- [Response Cache](#customisation-cache)

### Authenticators <a name="customisation-authenticators"></a>

If you want to provide your own authenticator class you will need to implement either the `CookieAuthenticable` or `OAuthAuthenticable` interface, depending on if you wish to pass a T1 session_id for cookie authentication or an access token for OAuth authentication with your requests.

#### Example custom cookie authenticator

You are welcome to use the `AdamaCookieAuth` class provided in this SDK. However, if you wish to write your own, your cookie authenticator needs to accept a session id in its constructor. If you want to use the provided Guzzle HTTP transport, your `cookieValues()` method needs to return an array with the key 'adama_session'. Your `authHash()` method needs to return a unique identifier. In this case just the `session_id` parameter is sufficient.

```php
namespace Acme;

use Mediamath\TerminalOneAPI\Infrastructure\CookieAuthenticable;

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
    
    public function authHash()
    {
        return $this->session_id;
    }

}
```


#### Example custom OAuth authenticator

You are welcome to use the `OAuthAuth` class provided in this SDK. However, if you wish to write your own, your OAuth authenticator needs to accept an API key and a bearer token in its constructor. If you want to use the provided Guzzle HTTP transport, your `headers()` and `queryStringParams()` methods need to return arrays with the keys / values as shown. Your `authHash()` method needs to return a unique identifier. In this case a concatenation of the `api_key` and `bearer` parameters is sufficient.

```php
namespace Acme;

use Mediamath\TerminalOneAPI\Infrastructure\OAuthAuthenticable;

class AcmeOAuthAuth implements OAuthAuthenticable
{

    private $api_key, $bearer;

    public function __construct($api_key, $bearer)
    {
        $this->api_key = $api_key;
        $this->bearer = $bearer;
    }

    public function headers()
    {
        return ['Authorization' => 'Bearer ' . $this->bearer];
    }

    public function queryStringParams()
    {
        return ['api_key' => $this->api_key];
    }
    
    public function authHash()
    {
        return $this->api_key . $this->bearer;
    }

}
```

### HTTP Transport <a name="customisation-transport"></a>

You are welcome to use the `GuzzleTransporter` class provided in this SDK. However, if you wish to write your own your transport class needs to implement the `transportable` interface and your `__construct()` method accept an instance of `Authenticable`, which will be either an OAuth or session cookie authenticator.

Depending on which authentication method you use (OAuth or session cookie) you will either need to set an HTTP 'Authorization' header and add the API key to the query string, or you will need to set an 'adama_session' cookie in the request, containing your session id.  

```php
namespace Acme;

use Mediamath\TerminalOneAPI\Infrastructure\Transportable;
use Mediamath\TerminalOneAPI\Infrastructure\Authenticable;

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
    
    public function authHash()
    {
        return $this->authenticator->authHash();
    }

}
``` 

### Response Decoders <a name="customisation-decoders"></a>

You are welcome to use the various response decoder classes provided in this SDK. However, if you wish to write your own, your decoder class needs to implement the `decodable` interface and your `__construct()` method must accept the API response provided by the HTTP transport.

```php
namespace Acme;

use Mediamath\TerminalOneAPI\Infrastructure\Decodable;

class AcmeJSONResponseDecoder implements Decodable
{
    public function decode($api_response)
    {
    
        /**
        * Make all array keys of the response uppercase
        */
    
        $data = json_decode($api_response, true); 
    
        return array_change_key_case($data, CASE_UPPER);
    }

}
```

### Response Cache <a name="customisation-cache"></a>

You are welcome to use the Doctrine response cache classes provided in this SDK. However, if you wish to write your own, your cache class will need to implement the `Cacheable` interface.

```php
// example using the Laravel Cache singleton class and the Laravel Carbon singleton class

namespace Acme;

use Mediamath\TerminalOneAPI\Infrastructure\Cacheable;
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
use Mediamath\TerminalOneAPI\CachingApiClient;
use Mediamath\TerminalOneAPI\Decoder\JSONResponseDecoder;

$cached_json = new CachingApiClient($transport, new AcmeCache(600), new JSONResponseDecoder());

$data = (new Management\Vertical($cached_json))->read();
```