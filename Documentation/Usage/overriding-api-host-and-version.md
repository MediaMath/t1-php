### Overriding api host and version

There are two ways to override T1 API host sub-domain and version.
e.g. http://**api**.mediamath.com/api/v**2.0**/

#### On authentication using Username / Password
You can define last two optional parameters on creating `UserPasswordAuth` object.

```php
use MediaMath\TerminalOneAPI\Auth\UserPasswordAuth;
use MediaMath\TerminalOneAPI\ApiClient;
use MediaMath\TerminalOneAPI\Transport\GuzzleTransporter;

/*
* Set up the authenticator
*/
$auth = new UserPasswordAuth($username, $password, $api_key, $api_subdomain = null, $api_version = null);

/*
* Set up the HTTP transport with the authenticator
*/
$transport = new GuzzleTransporter($auth);

/*
*  Initialise the API client
*/
$client = new ApiClient($transport);
```
#### On reading API object

You can define last two optional parameters on reading any API object in this case `Management\Organization`.

```php
use MediaMath\TerminalOneAPI\Management;

/*
* Fetch all the organisations which are available under the authorised account 
*/
$orgs = $client->read(new Management\Organization([], $api_subdomain = null, $api_version = null));

var_dump($orgs->data());
```