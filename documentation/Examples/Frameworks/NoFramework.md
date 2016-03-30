# No Framework Example

- Create a blank composer.json file
- Install the SDK by referring to the installation instructions provided in this repository
- Include the composer autoloader in your PHP file
- Include the components you need in your PHP file

```php
<?php

// index.php

require_once '/path/to/vendor/autoload.php';

use MediaMath\TerminalOneAPI\ApiClient;
use MediaMath\TerminalOneAPI\Auth\AdamaCookieAuth;
use MediaMath\TerminalOneAPI\Management\Organization;
use MediaMath\TerminalOneAPI\Transport\GuzzleTransporter;

$session_id = '...';

$api_client = new ApiClient(new GuzzleTransporter(new AdamaCookieAuth($session_id)));

$orgs = $api_client->read(new Organization());

var_dump($orgs->data());
```