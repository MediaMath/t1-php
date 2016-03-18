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

$cached_client = new CachingApiClient($transport, new DoctrineFilesystemCache(TimePeriod::hours(1), $path));

$data = $cached_client->read(new Management\Vertical(), new JSONResponseDecoder());
```