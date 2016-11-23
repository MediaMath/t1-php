## Installation

Add MediaMath/t1-php to your requirements

	$ php composer.phar require "MediaMath/t1-php"

This SDK uses PSR-4 so classes and namespaces should be autoloaded in your application.

### Extra packages

If you want to use the Guzzle HTTP transport class provided in this SDK instead of writing your own, you will also need to install the Guzzle HTTP client library.

    $ php composer.phar require "guzzlehttp/guzzle"
    
If you want to use the Doctrine Api Response Cache class provided in this SDK instead of writing your own, you will also need to install the Doctrine Cache library.

    $ php composer.phar require "doctrine/cache"