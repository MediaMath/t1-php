### Pagination <a name="pagination"></a>

Some endpoints of the API contain a lot of data. If you explicitly use the `JSONResponseDecoder` or the `XMLResponseDecoder` decoders the `ApiClient` will automatically fetch all paginated entities if you pass the option `'fetch' => 'all'` to your `read()` method. If you use the `DefaultResponseDecoder` decoder, or supply your own decoder, you will be responsible for creating your own pagination logic.

```php
use MediaMath\TerminalOneAPI\Management;

/*
* Fetch all the campaigns which are available under the authorised account 
*/
$data = $client->read(new Management\Campaign([
    'fetch' => 'all'
    ])
);
``` 

Endpoints which contain a lot of paginated data, for example `Management\Campaigns`, work best when used in conjunction with a `CachingApiClient` instance.