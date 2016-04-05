MediaMath\TerminalOneAPI\Transport\GuzzleTransporter
===============

Class GuzzleTransporter




* Class name: GuzzleTransporter
* Namespace: MediaMath\TerminalOneAPI\Transport
* This class implements: [MediaMath\TerminalOneAPI\Infrastructure\Transportable](MediaMath-TerminalOneAPI-Infrastructure-Transportable.md)




Properties
----------


### $guzzle

    private \GuzzleHttp\Client $guzzle





* Visibility: **private**


### $authenticator

    private \MediaMath\TerminalOneAPI\Infrastructure\Authenticable $authenticator





* Visibility: **private**


### $parameter_handler

    private \MediaMath\TerminalOneAPI\Transport\GuzzleParameterHandler $parameter_handler





* Visibility: **private**


Methods
-------


### __construct

    mixed MediaMath\TerminalOneAPI\Infrastructure\Transportable::__construct(\MediaMath\TerminalOneAPI\Infrastructure\Authenticable $authenticator)

Transportable constructor.



* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Transportable](MediaMath-TerminalOneAPI-Infrastructure-Transportable.md)


#### Arguments
* $authenticator **[MediaMath\TerminalOneAPI\Infrastructure\Authenticable](MediaMath-TerminalOneAPI-Infrastructure-Authenticable.md)**



### read

    mixed MediaMath\TerminalOneAPI\Infrastructure\Transportable::read($uri, $options)





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Transportable](MediaMath-TerminalOneAPI-Infrastructure-Transportable.md)


#### Arguments
* $uri **mixed**
* $options **mixed**



### create

    mixed MediaMath\TerminalOneAPI\Infrastructure\Transportable::create($uri, $data)





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Transportable](MediaMath-TerminalOneAPI-Infrastructure-Transportable.md)


#### Arguments
* $uri **mixed**
* $data **mixed**



### update

    mixed MediaMath\TerminalOneAPI\Infrastructure\Transportable::update($uri, $data)





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Transportable](MediaMath-TerminalOneAPI-Infrastructure-Transportable.md)


#### Arguments
* $uri **mixed**
* $data **mixed**



### authUniqueId

    mixed MediaMath\TerminalOneAPI\Infrastructure\Transportable::authUniqueId()





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Transportable](MediaMath-TerminalOneAPI-Infrastructure-Transportable.md)




### headers

    \MediaMath\TerminalOneAPI\Infrastructure\HttpResponseHeaders MediaMath\TerminalOneAPI\Transport\GuzzleTransporter::headers($headers)





* Visibility: **private**


#### Arguments
* $headers **mixed**


