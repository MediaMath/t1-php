# CodeIgniter Framework Example

- Install the CodeIgniter framework
- Install the SDK by referring to the installation instructions provided in this repository
- Enable composer autoloading
- Include the components you need within your controller

```php
<?php

// application/config/config.php

$config['composer_autoload'] = 'vendor/autoload.php'; // or simply set to TRUE if your vendors are configured to save in 'application/vendor'
```

```php
<?php

// application/controllers/Welcome.php

use MediaMath\TerminalOneAPI\ApiClient;
use MediaMath\TerminalOneAPI\Auth\AdamaCookieAuth;
use MediaMath\TerminalOneAPI\Management\Organization;
use MediaMath\TerminalOneAPI\Transport\GuzzleTransporter;

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

		$session_id = '...';

		$api_client = new ApiClient(new GuzzleTransporter(new AdamaCookieAuth($session_id)));

		$orgs = $api_client->read(new Organization());

		$this->load->view('welcome_message', [
			'organisations' => $orgs->data()
		]);
	}
}
```

```php
<?php
// application/views/welcome_message.php

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

    <style type="text/css">

        ::selection {
            background-color: #E13300;
            color: white;
        }

        ::-moz-selection {
            background-color: #E13300;
            color: white;
        }

        body {
            background-color: #fff;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }

        #body {
            margin: 0 15px 0 15px;
        }

        #container {
            margin: 10px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }
    </style>
</head>
<body>

    <div id="container">
    
        <div id="body">
            <pre><?php echo $organisations; ?></pre>
        </div>
    
    </div>

</body>
</html>
```