MediaMath\TerminalOneAPI\CachingApiClient
===============

Class CachingApiClient




* Class name: CachingApiClient
* Namespace: MediaMath\TerminalOneAPI
* This class implements: [MediaMath\TerminalOneAPI\Infrastructure\Clientable](MediaMath-TerminalOneAPI-Infrastructure-Clientable.md)




Properties
----------


### $api_client

    private \MediaMath\TerminalOneAPI\ApiClient $api_client





* Visibility: **private**


### $cache

    private \MediaMath\TerminalOneAPI\Infrastructure\Cacheable $cache





* Visibility: **private**


### $decoder

    private \MediaMath\TerminalOneAPI\Decoder\DefaultResponseDecoder $decoder





* Visibility: **private**


### $unique_id

    private mixed $unique_id





* Visibility: **private**


Methods
-------


### __construct

    mixed MediaMath\TerminalOneAPI\CachingApiClient::__construct(\MediaMath\TerminalOneAPI\Infrastructure\Transportable $transport, \MediaMath\TerminalOneAPI\Infrastructure\Cacheable $cache, \MediaMath\TerminalOneAPI\Infrastructure\Decodable|null $decoder)

CachingApiClient constructor.



* Visibility: **public**


#### Arguments
* $transport **[MediaMath\TerminalOneAPI\Infrastructure\Transportable](MediaMath-TerminalOneAPI-Infrastructure-Transportable.md)**
* $cache **[MediaMath\TerminalOneAPI\Infrastructure\Cacheable](MediaMath-TerminalOneAPI-Infrastructure-Cacheable.md)**
* $decoder **[MediaMath\TerminalOneAPI\Infrastructure\Decodable](MediaMath-TerminalOneAPI-Infrastructure-Decodable.md)|null**



### read

    mixed MediaMath\TerminalOneAPI\Infrastructure\Clientable::read(\MediaMath\TerminalOneAPI\Infrastructure\ApiObject $endpoint, \MediaMath\TerminalOneAPI\Infrastructure\Decodable $decoder)





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Clientable](MediaMath-TerminalOneAPI-Infrastructure-Clientable.md)


#### Arguments
* $endpoint **[MediaMath\TerminalOneAPI\Infrastructure\ApiObject](MediaMath-TerminalOneAPI-Infrastructure-ApiObject.md)**
* $decoder **[MediaMath\TerminalOneAPI\Infrastructure\Decodable](MediaMath-TerminalOneAPI-Infrastructure-Decodable.md)**



### create

    mixed MediaMath\TerminalOneAPI\Infrastructure\Clientable::create(\MediaMath\TerminalOneAPI\Infrastructure\ApiObject $endpoint, \MediaMath\TerminalOneAPI\Infrastructure\Decodable $decoder)





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

    \MediaMath\TerminalOneAPI\Pagination\Pagination MediaMath\TerminalOneAPI\CachingApiClient::paginate(\MediaMath\TerminalOneAPI\Infrastructure\ApiObject $endpoint, \MediaMath\TerminalOneAPI\Infrastructure\Decodable|null $decoder)





* Visibility: **public**


#### Arguments
* $endpoint **[MediaMath\TerminalOneAPI\Infrastructure\ApiObject](MediaMath-TerminalOneAPI-Infrastructure-ApiObject.md)**
* $decoder **[MediaMath\TerminalOneAPI\Infrastructure\Decodable](MediaMath-TerminalOneAPI-Infrastructure-Decodable.md)|null**


