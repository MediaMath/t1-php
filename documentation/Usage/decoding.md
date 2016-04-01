### Decoding the response <a name="decoding"></a>

The SDK ships with a number of decoders for the API response which allow you to retrieve a structured representation of the response string. Some reporting API endpoints return CSV, some reporting API endpoints return JSON, and the management API can return XML or JSON. If you use the provided `GuzzleTransporter` the management API should always return JSON, but if you use your own custom HTTP transport class you are more likely to receive XML. 

By default the `ApiResponse::data()` method returns the API response 'as-is' without decoding into PHP objects or arrays. If you want an object or associative PHP array representation of the response, add an instance of the decoder you want to use. For API endpoints which return CSV, for example, you should inject a decoder into the `ApiClient` or `CachingApiClient` which expects a CSV string, or a decoder which expects a JSON string when the expected API response is JSON.

You can override the default decoder when you create an instance of the `ApiClient` if you wish, or you can add the decoder on a per-call basis

Note: Using the `JSONResponseDecoder` will give you an object representation of the response when you call `$response->data()`, whereas using the `XMLResponseDecoder` will give you an associative PHP array.

By providing your own decoders you can move your response decoding / formatting logic away from your controllers or implement a more fine-grained control over the decoding process.

```php
use MediaMath\TerminalOneAPI\ApiClient;
use MediaMath\TerminalOneAPI\Management;
use MediaMath\TerminalOneAPI\Reporting;
use MediaMath\TerminalOneAPI\Decoder\JSONResponseDecoder;

/*
*  Initialise the API client with the JSON response decoder as default
*/
$client = new ApiClient($transport, new JSONResponseDecoder());

/*
* Fetch all the organisations which are available under the authorised account 
*/
$orgs = $client->read(new Management\Organization());
// $orgs->data() will now return a PHP object instead of a JSON string
  
/*
* Now make another call but expect CSV instead
*/
$perfs = $client->read(new Reporting\Performance(), new CSVResponseDecoder());
// $perfs->data() will now return a PHP array instead of a CSV string
```

Some CSV responses (primarily `Reporting` endpoints) contain a row of headings as the first line of the response. The supplied `CSVResponseDecoder` can make use of this if you pass the constant `CSVDecoder::EXTRACT_HEADINGS` into its constructor.

```php
$client = new ApiClient($transport);

$audience_index = Reporting\AudienceIndex $client->read(Reporting\AudienceIndex([
    ...
    ]), new CSVResponseDecoder(CSVDecoder::EXTRACT_HEADINGS)
);

var_dump($audience_index->data());
```