- [Basic Read Requests](#basic)
- [Passing Options](#options)

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