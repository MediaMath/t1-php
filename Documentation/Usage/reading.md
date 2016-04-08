- [Basic Read Requests](#basic)
- [Passing Options](#options)

### Basic read requests <a name="basic"></a>

Depending on which T1 API you wish to call, either the Management API, the Reporting API, or the Video Api, you will need to include the respective namespaces.

```php
use MediaMath\TerminalOneAPI\Management;

/*
* Fetch all the organisations which are available under the authorised account 
*/
$orgs = $client->read(new Management\Organization());

var_dump($orgs->data());
```        
        
### Passing options to the API <a name="options"></a>

To pass options to the API, add them as an associative array within the `read()` method on the API object class. Refer to the T1 API docs to find out what options are valid for each endpoint.

```php
use MediaMath\TerminalOneAPI\Management;

$advertisers = $client->read(new Management\Advertiser([
    'with' => 'agency',
    'sort_by' => 'name'
    ])
);

var_dump($advertisers->data());
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

$audience_indexes = $client->read(new Reporting\AudienceIndex([
    'time_rollup' => 'all',
    'time_window' => 'last_14_days',
    'filter' => 'organization_id=......',
    'dimensions' => implode(',', $dimensions),
    'precision' => 2
    ])
);

var_dump($audience_indexes->data());
```