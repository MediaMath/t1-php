# Symfony Framework Example

- Install the Symfony framework
- Install the SDK by referring to the installation instructions provided in this repository
- Include the components you need within your controller

```php
<?php

// src/AppBundle/Controller/DefaultController.php

namespace AppBundle\Controller;

use MediaMath\TerminalOneAPI\ApiClient;
use MediaMath\TerminalOneAPI\Auth\AdamaCookieAuth;
use MediaMath\TerminalOneAPI\Management\Organization;
use MediaMath\TerminalOneAPI\Transport\GuzzleTransporter;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $session_id = '...';

        $api_client = new ApiClient(new GuzzleTransporter(new AdamaCookieAuth($session_id)));

        $orgs = $api_client->read(new Organization());

        return $this->render('default/index.html.twig', [
            'organisations' => $orgs->data()
        ]);
    }
}
```

```html
 <!-- app/Resources/views/default/index.html.twig -->
 
 {% extends 'base.html.twig' %}
 
 {% block body %}
     <div id="wrapper">
         <div id="container">
 
             <div>
                 <p>
                 <pre>{{ organisations }}</pre>
                 </p>
             </div>
 
         </div>
     </div>
 {% endblock %}
 
 {% block stylesheets %}
     <style>
         body {
             background: #F5F5F5;
             font: 18px/1.5 sans-serif;
         }
         p {
             margin: 0 0 1em 0;
         }
 
         #wrapper {
             background: #FFF;
             margin: 1em auto;
             max-width: 800px;
             width: 95%;
         }
 
         #container {
             padding: 2em;
         }
 
         @media (min-width: 768px) {
             #wrapper {
                 width: 80%;
                 margin: 2em auto;
             }
 
             #status a, #next a {
                 display: block;
             }
 
             @-webkit-keyframes fade-in {
                 0% {
                     opacity: 0;
                 }
                 100% {
                     opacity: 1;
                 }
             }
             @keyframes fade-in {
                 0% {
                     opacity: 0;
                 }
                 100% {
                     opacity: 1;
                 }
             }
             .sf-toolbar {
                 opacity: 0;
                 -webkit-animation: fade-in 1s .2s forwards;
                 animation: fade-in 1s .2s forwards;
             }
         }
     </style>
 {% endblock %}
```