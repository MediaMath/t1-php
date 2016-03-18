- [Querying](#querying)
- [Using limits](#limits)

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