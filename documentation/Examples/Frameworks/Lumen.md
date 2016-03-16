# Lumen Framework Example

- Install the Lumen framework
- Install the SDK by referring to the installation instructions provided in this repository
- Include the components you need within your controller

```php
<?php

// app/Http/routes.php

$app->get('/', 'ExampleController@index');
```

```php
<?php

// app/Http/Controllers/ExampleController.php

namespace App\Http\Controllers;

use MediaMath\TerminalOneAPI\ApiClient;
use MediaMath\TerminalOneAPI\Auth\AdamaCookieAuth;
use MediaMath\TerminalOneAPI\Management\Organization;
use MediaMath\TerminalOneAPI\Transport\GuzzleTransporter;

class ExampleController extends Controller
{

    public function index()
    {

        $session_id = '...';

        $api_client = new ApiClient(new GuzzleTransporter(new AdamaCookieAuth($session_id)));

        $orgs = (new Organization($api_client))->read();

        return response($orgs);

    }
}
```