MediaMath\TerminalOneAPI\Transport\GuzzleParameterHandler
===============

Class GuzzleParameterHandler




* Class name: GuzzleParameterHandler
* Namespace: MediaMath\TerminalOneAPI\Transport





Properties
----------


### $authenticator

    private \MediaMath\TerminalOneAPI\Infrastructure\Authenticable $authenticator





* Visibility: **private**


Methods
-------


### __construct

    mixed MediaMath\TerminalOneAPI\Transport\GuzzleParameterHandler::__construct(\MediaMath\TerminalOneAPI\Infrastructure\Authenticable $authenticator)

GuzzleParameterHandler constructor.



* Visibility: **public**


#### Arguments
* $authenticator **[MediaMath\TerminalOneAPI\Infrastructure\Authenticable](MediaMath-TerminalOneAPI-Infrastructure-Authenticable.md)**



### read

    mixed MediaMath\TerminalOneAPI\Transport\GuzzleParameterHandler::read($options, $uri)





* Visibility: **public**


#### Arguments
* $options **mixed**
* $uri **mixed**



### post

    mixed MediaMath\TerminalOneAPI\Transport\GuzzleParameterHandler::post($options)





* Visibility: **public**


#### Arguments
* $options **mixed**



### cookies

    null|static MediaMath\TerminalOneAPI\Transport\GuzzleParameterHandler::cookies()





* Visibility: **private**




### headers

    array MediaMath\TerminalOneAPI\Transport\GuzzleParameterHandler::headers()





* Visibility: **private**




### queryString

    mixed MediaMath\TerminalOneAPI\Transport\GuzzleParameterHandler::queryString($options)





* Visibility: **private**


#### Arguments
* $options **mixed**



### formParams

    mixed MediaMath\TerminalOneAPI\Transport\GuzzleParameterHandler::formParams($options)





* Visibility: **private**


#### Arguments
* $options **mixed**



### getParamsFromUri

    array MediaMath\TerminalOneAPI\Transport\GuzzleParameterHandler::getParamsFromUri($uri)





* Visibility: **private**


#### Arguments
* $uri **mixed**


