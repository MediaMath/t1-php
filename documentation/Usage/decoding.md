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