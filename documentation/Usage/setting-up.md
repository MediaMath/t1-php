### Setting up the SDK <a name="setting-up"></a>

To set up the SDK for making API calls you need to initialise an HTTP transport with your chosen authentication method. See [Customisation](../Customising/customising.md) for instructions on creating your own authenticators, HTTP transports, response decoders, or response caching.

Apart from initialising the authenticator, the steps for getting a response from the API are the same, whether using OAuth or cookie authentication. If using OAuth or Adama, you will need to obtain your OAuth or Adama credentials from T1 before initialising the SDK. See https://developer.mediamath.com/docs/read/terminalone_api_overview/Authentication for more information on how to do this.

#### Using Adama session cookie

```php
use MediaMath\TerminalOneAPI\Auth\AdamaCookieAuth;
use MediaMath\TerminalOneAPI\ApiClient;
use MediaMath\TerminalOneAPI\Transport\GuzzleTransporter;

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
```

```php
/*
* Or use the one-line setup:
*/
$client = new ApiClient(new GuzzleTransporter(new AdamaCookieAuth($session_id)));
```

#### Using Username / Password
```php
use MediaMath\TerminalOneAPI\Auth\UserPasswordAuth;
use MediaMath\TerminalOneAPI\ApiClient;
use MediaMath\TerminalOneAPI\Transport\GuzzleTransporter;

/*
* Set up the authenticator
*/
$auth = new UserPasswordAuth($username, $password, $api_key);

/*
* Set up the HTTP transport with the authenticator
*/
$transport = new GuzzleTransporter($auth);

/*
*  Initialise the API client
*/
$client = new ApiClient($transport);
```

```php
/*
* Or use the one-line setup:
*/
$client = new ApiClient(new GuzzleTransporter(new UserPasswordAuth($username, $password, $api_key)));
```

#### Using OAuth

```php
use MediaMath\TerminalOneAPI\Auth\OAuthAuth;
use MediaMath\TerminalOneAPI\ApiClient;
use MediaMath\TerminalOneAPI\Transport\GuzzleTransporter;

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

```php
/*
* Or use the one-line setup:
*/
$client = new ApiClient(new GuzzleTransporter(new OAuthAuth($api_key, $access_token)));
```