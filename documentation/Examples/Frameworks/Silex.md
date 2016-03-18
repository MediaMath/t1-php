# Silex Framework Example

- Install the Silex framework
- Install the SDK by referring to the installation instructions provided in this repository
- Include the components you need within your controller

```php
<?php

// web/index.php

require_once __DIR__.'/../vendor/autoload.php';

use MediaMath\TerminalOneAPI\ApiClient;
use MediaMath\TerminalOneAPI\Auth\AdamaCookieAuth;
use MediaMath\TerminalOneAPI\Management\Organization;
use MediaMath\TerminalOneAPI\Transport\GuzzleTransporter;

$app = new Silex\Application();

$app->get('/', function (Silex\Application $app) {

    $session_id = '...';

    $api_client = new ApiClient(new GuzzleTransporter(new AdamaCookieAuth($session_id)));

    $orgs = $api_client->read(new Organization());

    return $orgs;

});

$app->run();
```