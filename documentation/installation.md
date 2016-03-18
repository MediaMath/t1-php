## Installation

This is a private repository not listed on packagist, so you will need to configure the repository in your composer.json yourself:

	{
		...,
		"repositories": [
			{
				"type": "vcs",
				"url": "git://github.com/MediaMath/open_t1_php_sdk.git"
			}
		],
	}

And add MediaMath/open_t1_php_sdk to your requirements

	$ php composer.phar require "MediaMath/open_t1_php_sdk"

This SDK uses PSR-4 so classes and namespaces should be autoloaded in your application.

### Extra packages

If you want to use the Guzzle HTTP transport class provided in this SDK instead of writing your own, you will also need to install the Guzzle HTTP client library.

    $ php composer.phar require "guzzlehttp/guzzle"
    
If you want to use the Doctrine Api Response Cache class provided in this SDK instead of writing your own, you will also need to install the Doctrine Cache library.

    $ php composer.phar require "doctrine/cache"