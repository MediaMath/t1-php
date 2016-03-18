## Usage <a name="usage"></a>

- [Overview](#overview)
- [Setting up the SDK](#setting-up)
- [Basic Read Requests](#basic)
- [Passing Options](#options)
- [Querying](#querying)
- [Using limits](#limits)
- [Fetching Single Objects](#fetching)
- [Creating Objects](#creating)
- [Updating Objects](#updating)
- [Deleting Objects](#deleting)
- [Decoding The Response](#decoding)
- [Caching The Response](#caching)
- [Pagination](#pagination)

### Overview <a name="overview"></a>

#### The SDK structure is as follows:

1. Authenticator - allows you to authenticate against the T1 API either using adama, username / password, or OAuth
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
 
### Setting up the SDK <a name="setting-up"></a>

To set up the SDK for making API calls you need to initialise an HTTP transport with your chosen authentication method. See [Customisation](#customisation) for instructions on creating your own authenticators, HTTP transports, response decoders, or response caching.

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

### Basic read requests <a name="basic"></a>

Depending on which T1 API you wish to call, either the Management API, the Reporting API, or the Video Api, you will need to include the respective namespaces.

```php
use MediaMath\TerminalOneAPI\Management;

/*
* Fetch all the organisations which are available under the authorised account 
*/
$data = (new Management\Organization($client))->read();
```        
        
### Passing options to the API <a name="options"></a>

To pass options to the API, add them as an associative array within the `read()` method on the API object class. Refer to the T1 API docs to find out what options are valid for each endpoint.

```php
use MediaMath\TerminalOneAPI\Management;

$data = (new Management\Advertiser($client))->read([
    'with' => 'agency',
    'sort_by' => 'name'
]);
```

```php
use MediaMath\TerminalOneAPI\Reporting;

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

### Querying the API <a name="querying"></a>

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

### Using the LIMIT parameter <a name="limits"></a>

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

### Fetching single objects <a name="fetching"></a>

The feed endpoints `organizations/`, `agencies/`, `campaigns/`, etc do not fully hydrate the returned entities by default. In order to retrieve the complete data set you should fetch an object on its own. The T1 docs show this is done by making a call to `organizations/[id]`, for example.

If you pass an `'id'` parameter into the `read()` method's options array the SDK will automatically modify the URI and fetch the associated object for you.

```php
$data = (new Management\Organization($client))->read([
    'id' => ......,
]);
```

### Creating objects <a name="creating"></a>

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

### Updating objects <a name="updating"></a>

Each object on the API which can be updated has a corresponding `update()` method in the SDK to which you can pass the required parameters in an array. If you attempt to call `update()` on an object which cannot be updated on the API you will receive a PHP exception. Refer to the T1 API documentation for the required parameters for each object / endpoint.

A general rule of thumb for updating objects is that they require the same parameters as the creation endpoint but with the addition of an `'id' => ...` parameter in the options array.

```php
$strategy = (new Management\Campaign($client))->update([
    'id' => ......,
    // ...    
]);
```

### Deleting objects <a name="deleting"></a>

Most items cannot be deleted via the API and should be updated where possible to make them inactive. In some rare cases objects can be deleted via the API, and these objects will have a `delete()` method available. If you attempt to call `delete()` on an object which cannot be deleted on the API you will receive a PHP exception.

```php
$strategy = (new Management\CampaignBudgetFlight($client))->delete([
    'campaign_id' => ......,
    'id' => ......
]);
```


### Decoding the response <a name="decoding"></a>

The SDK ships with a number of decoders for the API response. Some reporting API endpoints return CSV, some reporting API endpoints return JSON, and the management API can return XML or JSON. If you use the provided `GuzzleTransporter` the management API should always return JSON, but if you use your own custom HTTP transport class you are more likely to receive XML. 

By default the `ApiClient` class returns the API response 'as-is' without decoding into PHP objects or arrays. If you want an object or associative PHP array representation of the response, add an instance of the decoder you want to use. For API endpoints which return CSV, for example, you should inject a decoder which expects a CSV string, or a decoder which expects a JSON string when the expected API response is JSON.

Note: Using the `JSONResponseDecoder` will give you an object representation of the response, whereas using the `XMLResponseDecoder` will give you an associative PHP array.

By providing your own decoders you can move your response decoding / formatting logic away from your controllers or implement a more fine-grained control over the decoding process.

```php
use MediaMath\TerminalOneAPI\ApiClient;
use MediaMath\TerminalOneAPI\Management;
use MediaMath\TerminalOneAPI\Decoder\JSONResponseDecoder;

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

Some CSV responses (primarily `Reporting` endpoints) contain a row of headings as the first line of the response. The supplied `CSVResponseDecoder` can make use of this if you pass the constant `CSVDecoder::EXTRACT_HEADINGS` into its constructor.

```php

$client = new ApiClient($transport, new CSVResponseDecoder(CSVDecoder::EXTRACT_HEADINGS));

$data = (new Reporting\AudienceIndex($client))->read([
    ...
]);
```

### Caching the response <a name="caching"></a>

Caching API responses can greatly speed up certain areas of your application. This SDK ships with a number of cache options which all use the Doctrine Cache drivers. Included are:

- Filesystem cache
- APC*
- xCache*
- Memcache*
- Memcached*

*Note: To use the APC, xCache, Memcache, or Memcached caches you will need the relevant PHP extension installed and enabled in your PHP environment.

To use the caching API client you need to use the `CachingApiClient` instead of the `ApiClient` class. The `CachingApiClient` takes an extra required parameter, which is the type of cache you wish to use. You can either use one of the Doctrine cache classes provided or write your own.

All cache classes provided with this SDK require a TTL to be set in the constructor using the static `TimePeriod` named methods:
 
```php
$five_hours = TimePeriod::hours(5); // translates internally to 5 x 60 x 60 seconds.
$eight_minutes = TimePeriod::minutes(8); // translates internally to 8 x 60 seconds.
$ten_seconds = TimePeriod::seconds(10);
```

Additionally, the `DoctrineFilesystemCache` class provided with this SDK requires a filesystem path to be provided, which is where the cached objects will be stored.

The `CachingApiClient` only caches read requests. It does not cache creation or updating of API objects.

```php
use MediaMath\TerminalOneAPI\CachingApiClient;
use MediaMath\TerminalOneAPI\Decoder\JSONResponseDecoder;
use MediaMath\TerminalOneAPI\Cache\DoctrineFilesystemCache;
use MediaMath\TerminalOneAPI\Cache\TimePeriod;

/*
* Specify a path to the cache directory.
* In this case it is a Symfony 3 cache relative to the current controller but you could 
* use any writeable directory, Laravel cache directory, path set in global config, etc.
*/
$path = __DIR__ . '/../../../var/cache/api_requests/';

$cached_json = new CachingApiClient($transport, new DoctrineFilesystemCache(TimePeriod::hours(1), $path), new JSONResponseDecoder());

$data = (new Management\Vertical($cached_json))->read();
```

### Pagination <a name="pagination"></a>

Some endpoints of the API contain a lot of data. If you explicitly use the `JSONResponseDecoder` or the `XMLResponseDecoder` decoders the `ApiClient` will automatically fetch all paginated entities if you pass the option `'fetch' => 'all'` to your `read()` method. If you use the `DefaultResponseDecoder` decoder, or supply your own decoder, you will be responsible for creating your own pagination logic.

```php
use MediaMath\TerminalOneAPI\Management;

/*
* Fetch all the campaigns which are available under the authorised account 
*/
$data = (new Management\Campaign($client))->read([
    'fetch' => 'all'
]);
``` 

Endpoints which contain a lot of paginated data, for example `Management\Campaigns`, work best when used in conjunction with a `CachingApiClient` instance.