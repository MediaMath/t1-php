### Pagination <a name="pagination"></a>

Some endpoints of the API contain a lot of data. The `ApiClient` and `CachingApiClient` classes include methods for paginating data. By calling the `paginate()` method you will receive an instance of `Pagination`, which has several methods available to expose the data to you. Each of these methods will return an instance of `ApiResponse` (with the exception of `numResults()` and `numPages()`)  

```php
use MediaMath\TerminalOneAPI\Management;

/*
* Fetch all the campaigns which are available under the authorised account 
*/
$pages = $client->paginate(new Management\Campaign());

var_dump($pages->first()->data()); // internal pointer is set to page 1

var_dump($pages->last()->data()); // internal pointer is set to the last page

var_dump($pages->previous()->data()); // internal pointer is set to the penultimate page

var_dump($pages->page(8)->data()); // internal pointer is set to page 8

var_dump($pages->next()->data()); // internal pointer is set to page 9

``` 

If you are using the `CachingApiClient` your pages will be cached as normal