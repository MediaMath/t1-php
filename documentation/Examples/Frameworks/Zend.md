# Zend Framework Example

- Install the Zend framework
- Install the SDK by referring to the installation instructions provided in this repository
- Include the components you need within your controller

```php
<?php

// module/Application/src/Application/Controller/IndexController.php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use MediaMath\TerminalOneAPI\ApiClient;
use MediaMath\TerminalOneAPI\Auth\AdamaCookieAuth;
use MediaMath\TerminalOneAPI\Management\Organization;
use MediaMath\TerminalOneAPI\Transport\GuzzleTransporter;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {

        $session_id = '...';

        $api_client = new ApiClient(new GuzzleTransporter(new AdamaCookieAuth($session_id)));

        $orgs = (new Organization($api_client))->read();

        return new ViewModel([
            'organisations' => $orgs
        ]);
    }
}
```

```php
<!-- module/Application/view/application/index/index.phtml -->

<div>
    <pre><?php echo $organisations; ?></pre>
</div>
```