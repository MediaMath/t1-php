### Fetching full objects <a name="fetching"></a>

The feed endpoints `organizations/`, `agencies/`, `campaigns/`, etc do not fully hydrate the returned entities by default. In order to retrieve the complete data set you have two options: you can specifically request a fully-hydrated list or fetch a single object on its own.
 
#### Requesting a fully hydrated feed

T1 API feed endpoints support a 'full' parameter for which you can pass the `*` character. For example:

Normal `read()` operation

```php
$orgs = $client->read(new Management\Organization());

var_dump($orgs->data());
```

Will display something like this:

```json
{
   "data" : [
      {
         "entity_type" : "organization",
         "name" : "ACME",
         "id" : ......
      }
   ],
   "meta" : {
      "etag" : "......",
      "count" : 1,
      "called_on" : "YYYY-MM-DDTHH:MM:SS+0000",
      "status" : "ok",
      "offset" : 0,
      "total_count" : 1
   }
}
```

Extended `read()` operation

```php
$orgs = $client->read(new Management\Organization([
    'full' => '*'
    ])
);

var_dump($orgs->data());
```

Will return fully hydrated objects:

```json
{
   "data" : [
      {
         "status" : true,
         "dmp_enabled" : "enabled",
         "contact_name" : ".....",
         "org_type" : [
            "buyer"
         ],
         "updated_on" : "YYYY-MM-DDTHH:MM:SS+0000",
         "state" : "NY",
         "address_2" : "4WTC",
         "address_1" : "1440 Broadway",
         "mm_contact_name" : ".....",
         "city" : "New York",
         "allow_x_agency_pixels" : true,
         "restrict_targeting_to_deterministic_id" : true,
         "created_on" : "YYYY-MM-DDTHH:MM:SS+0000",
         "entity_type" : "organization",
         "id" : ......,
         "country" : "US",
         "opt_out_connected_id_mathid" : false,
         "currency_code" : "USD",
         "override_suspicious_traffic_filter" : false,
         "version" : 108,
         "name" : "ACME",
         "restrict_targeting_to_same_device_id" : true,
         "phone" : "(...) ...-....",
         "suspicious_traffic_filter_level" : 25,
         "allow_byo_price" : true,
         "opt_out_connected_id" : true,
         "zip" : "10018",
         "billing_country_code" : "US",
         "use_evidon_optout" : true,
         "adx_seat_account_id" : ......
      },
      {
         "status" : true,
         "dmp_enabled" : "enabled",
         "contact_name" : ".....",
         "org_type" : [
            "buyer"
         ],
         "updated_on" : "YYYY-MM-DDTHH:MM:SS+0000",
         "state" : "NY",
         "address_2" : "4WTC",
         "address_1" : "1440 Broadway",
         "mm_contact_name" : ".....",
         "city" : "New York",
         "allow_x_agency_pixels" : true,
         "restrict_targeting_to_deterministic_id" : true,
         "created_on" : "YYYY-MM-DDTHH:MM:SS+0000",
         "entity_type" : "organization",
         "id" : ......,
         "country" : "US",
         "opt_out_connected_id_mathid" : false,
         "currency_code" : "USD",
         "override_suspicious_traffic_filter" : false,
         "version" : 108,
         "name" : "ACME 2",
         "restrict_targeting_to_same_device_id" : true,
         "phone" : "(...) ...-....",
         "suspicious_traffic_filter_level" : 25,
         "allow_byo_price" : true,
         "opt_out_connected_id" : true,
         "zip" : "10018",
         "billing_country_code" : "US",
         "use_evidon_optout" : true,
         "adx_seat_account_id" : ......
      }
   ],
   "meta" : {
      "etag" : "5770c72f32e7d4f8d96b6bf39c827f7af27146bb",
      "count" : 1,
      "called_on" : "2016-03-18T12:00:00+0000",
      "status" : "ok",
      "offset" : 0,
      "total_count" : 1
   }
}
```

#### Requesting a fully hydrated single object

The T1 docs show this is done by making a call to `organizations/[id]`.

If you pass an `'id'` parameter into the `read()` method's options array the SDK will automatically modify the URI and fetch the associated object for you.

```php
$orgs = $client->read(new Management\Organization([
    'id' => ......,
    ])
);

var_dump($orgs->data());
```

Will return a fully hydrated single object:

```
{
   "data" : {
        "status" : true,
        "dmp_enabled" : "enabled",
        "contact_name" : ".....",
        "org_type" : [
            "buyer"
        ],
        "updated_on" : "YYYY-MM-DDTHH:MM:SS+0000",
        "state" : "NY",
        "address_2" : "4WTC",
        "address_1" : "1440 Broadway",
        "mm_contact_name" : ".....",
        "city" : "New York",
        "allow_x_agency_pixels" : true,
        "restrict_targeting_to_deterministic_id" : true,
        "created_on" : "YYYY-MM-DDTHH:MM:SS+0000",
        "entity_type" : "organization",
        "id" : ......,
        "country" : "US",
        "opt_out_connected_id_mathid" : false,
        "currency_code" : "USD",
        "override_suspicious_traffic_filter" : false,
        "version" : 108,
        "name" : "ACME",
        "restrict_targeting_to_same_device_id" : true,
        "phone" : "(...) ...-....",
        "suspicious_traffic_filter_level" : 25,
        "allow_byo_price" : true,
        "opt_out_connected_id" : true,
        "zip" : "10018",
        "billing_country_code" : "US",
        "use_evidon_optout" : true,
        "adx_seat_account_id" : ......
    },
    "meta" : {
        "etag" : "fc4c2199ac9054bca7616bc535b04c031a849ca8",
        "called_on" : "2016-03-18T12:06:48+0000",
        "status" : "ok"
    }
}
```