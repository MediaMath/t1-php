MediaMath\TerminalOneAPI\ApiClient
===============

Class ApiClient




* Class name: ApiClient
* Namespace: MediaMath\TerminalOneAPI
* This class implements: [MediaMath\TerminalOneAPI\Infrastructure\Clientable](MediaMath-TerminalOneAPI-Infrastructure-Clientable.md)




Properties
----------


### $transport

    private \MediaMath\TerminalOneAPI\Decoder\DefaultResponseDecoder $transport





* Visibility: **private**


### $decoder

    private \MediaMath\TerminalOneAPI\Decoder\DefaultResponseDecoder $decoder





* Visibility: **private**


Methods
-------


### __construct

    mixed MediaMath\TerminalOneAPI\ApiClient::__construct(\MediaMath\TerminalOneAPI\Infrastructure\Transportable $transport, \MediaMath\TerminalOneAPI\Infrastructure\Decodable|null $decoder)

ApiClient constructor.



* Visibility: **public**


#### Arguments
* $transport **[MediaMath\TerminalOneAPI\Infrastructure\Transportable](MediaMath-TerminalOneAPI-Infrastructure-Transportable.md)**
* $decoder **[MediaMath\TerminalOneAPI\Infrastructure\Decodable](MediaMath-TerminalOneAPI-Infrastructure-Decodable.md)|null**



### create

    mixed MediaMath\TerminalOneAPI\Infrastructure\Clientable::create(\MediaMath\TerminalOneAPI\Infrastructure\ApiObject $endpoint, \MediaMath\TerminalOneAPI\Infrastructure\Decodable $decoder)





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Clientable](MediaMath-TerminalOneAPI-Infrastructure-Clientable.md)


#### Arguments
* $endpoint **[MediaMath\TerminalOneAPI\Infrastructure\ApiObject](MediaMath-TerminalOneAPI-Infrastructure-ApiObject.md)**
* $decoder **[MediaMath\TerminalOneAPI\Infrastructure\Decodable](MediaMath-TerminalOneAPI-Infrastructure-Decodable.md)**



### read

    mixed MediaMath\TerminalOneAPI\Infrastructure\Clientable::read(\MediaMath\TerminalOneAPI\Infrastructure\ApiObject $endpoint, \MediaMath\TerminalOneAPI\Infrastructure\Decodable $decoder)





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Clientable](MediaMath-TerminalOneAPI-Infrastructure-Clientable.md)


#### Arguments
* $endpoint **[MediaMath\TerminalOneAPI\Infrastructure\ApiObject](MediaMath-TerminalOneAPI-Infrastructure-ApiObject.md)**
* $decoder **[MediaMath\TerminalOneAPI\Infrastructure\Decodable](MediaMath-TerminalOneAPI-Infrastructure-Decodable.md)**



### update

    mixed MediaMath\TerminalOneAPI\Infrastructure\Clientable::update(\MediaMath\TerminalOneAPI\Infrastructure\ApiObject $endpoint, \MediaMath\TerminalOneAPI\Infrastructure\Decodable $decoder)





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Clientable](MediaMath-TerminalOneAPI-Infrastructure-Clientable.md)


#### Arguments
* $endpoint **[MediaMath\TerminalOneAPI\Infrastructure\ApiObject](MediaMath-TerminalOneAPI-Infrastructure-ApiObject.md)**
* $decoder **[MediaMath\TerminalOneAPI\Infrastructure\Decodable](MediaMath-TerminalOneAPI-Infrastructure-Decodable.md)**



### paginate

    \MediaMath\TerminalOneAPI\Pagination\Pagination MediaMath\TerminalOneAPI\ApiClient::paginate(\MediaMath\TerminalOneAPI\Infrastructure\ApiObject $endpoint, \MediaMath\TerminalOneAPI\Infrastructure\Decodable|null $decoder)





* Visibility: **public**


#### Arguments
* $endpoint **[MediaMath\TerminalOneAPI\Infrastructure\ApiObject](MediaMath-TerminalOneAPI-Infrastructure-ApiObject.md)**
* $decoder **[MediaMath\TerminalOneAPI\Infrastructure\Decodable](MediaMath-TerminalOneAPI-Infrastructure-Decodable.md)|null**


