# Laravel Framework Example

- Install the Laravel framework
- Install the SDK by referring to the installation instructions provided in this repository
- Include the components you need within your controller

```php
<?php

// app/Http/routes.php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', "FrontController@index");
});

```

```php
<?php

// app/Http/Controllers/FrontController.php

namespace App\Http\Controllers;

use MediaMath\TerminalOneAPI\ApiClient;
use MediaMath\TerminalOneAPI\Auth\AdamaCookieAuth;
use MediaMath\TerminalOneAPI\Management\Organization;
use MediaMath\TerminalOneAPI\Transport\GuzzleTransporter;

class FrontController extends Controller {

    public function index() {

        $session_id = '...';

        $api_client = new ApiClient(new GuzzleTransporter(new AdamaCookieAuth($session_id)));

        $orgs = $api_client->read(new Organization());

        return view('welcome', ['organisations' => $orgs->data()]);

    }

}
```

```php
<!DOCTYPE html>
<html>
    <!-- resources/views/welcome.blade.php -->
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">{{ $organisations }}</div>
            </div>
        </div>
    </body>
</html>
```