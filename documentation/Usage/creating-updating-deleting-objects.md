- [Creating Objects](#creating)
- [Updating Objects](#updating)
- [Deleting Objects](#deleting)

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