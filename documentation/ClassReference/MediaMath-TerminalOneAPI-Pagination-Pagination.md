MediaMath\TerminalOneAPI\Pagination\Pagination
===============

Class Pagination




* Class name: Pagination
* Namespace: MediaMath\TerminalOneAPI\Pagination
* This class implements: [MediaMath\TerminalOneAPI\Infrastructure\Paginatable](MediaMath-TerminalOneAPI-Infrastructure-Paginatable.md)




Properties
----------


### $endpoint

    private \MediaMath\TerminalOneAPI\Infrastructure\ApiObject $endpoint





* Visibility: **private**


### $decoder

    private \MediaMath\TerminalOneAPI\Infrastructure\Decodable $decoder





* Visibility: **private**


### $api_client

    private \MediaMath\TerminalOneAPI\Infrastructure\Clientable $api_client





* Visibility: **private**


### $current_page

    private integer $current_page = 1





* Visibility: **private**


### $num_per_page

    private integer $num_per_page = 100





* Visibility: **private**


### $num_results

    private null $num_results





* Visibility: **private**


### $result_cache

    private array $result_cache = array()





* Visibility: **private**


Methods
-------


### __construct

    mixed MediaMath\TerminalOneAPI\Pagination\Pagination::__construct(\MediaMath\TerminalOneAPI\Infrastructure\ApiObject $endpoint, \MediaMath\TerminalOneAPI\Infrastructure\Decodable $decoder, \MediaMath\TerminalOneAPI\Infrastructure\Clientable $api_client)

Pagination constructor.



* Visibility: **public**


#### Arguments
* $endpoint **[MediaMath\TerminalOneAPI\Infrastructure\ApiObject](MediaMath-TerminalOneAPI-Infrastructure-ApiObject.md)**
* $decoder **[MediaMath\TerminalOneAPI\Infrastructure\Decodable](MediaMath-TerminalOneAPI-Infrastructure-Decodable.md)**
* $api_client **[MediaMath\TerminalOneAPI\Infrastructure\Clientable](MediaMath-TerminalOneAPI-Infrastructure-Clientable.md)**



### page

    mixed MediaMath\TerminalOneAPI\Infrastructure\Paginatable::page($page_number)





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Paginatable](MediaMath-TerminalOneAPI-Infrastructure-Paginatable.md)


#### Arguments
* $page_number **mixed**



### previous

    mixed MediaMath\TerminalOneAPI\Infrastructure\Paginatable::previous()





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Paginatable](MediaMath-TerminalOneAPI-Infrastructure-Paginatable.md)




### next

    mixed MediaMath\TerminalOneAPI\Infrastructure\Paginatable::next()





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Paginatable](MediaMath-TerminalOneAPI-Infrastructure-Paginatable.md)




### first

    mixed MediaMath\TerminalOneAPI\Infrastructure\Paginatable::first()





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Paginatable](MediaMath-TerminalOneAPI-Infrastructure-Paginatable.md)




### last

    mixed MediaMath\TerminalOneAPI\Infrastructure\Paginatable::last()





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Paginatable](MediaMath-TerminalOneAPI-Infrastructure-Paginatable.md)




### numPages

    mixed MediaMath\TerminalOneAPI\Infrastructure\Paginatable::numPages()





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Paginatable](MediaMath-TerminalOneAPI-Infrastructure-Paginatable.md)




### numResults

    mixed MediaMath\TerminalOneAPI\Infrastructure\Paginatable::numResults()





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Paginatable](MediaMath-TerminalOneAPI-Infrastructure-Paginatable.md)




### options

    mixed MediaMath\TerminalOneAPI\Pagination\Pagination::options(array $custom_options)





* Visibility: **private**


#### Arguments
* $custom_options **array**



### pageOffset

    integer|null MediaMath\TerminalOneAPI\Pagination\Pagination::pageOffset()





* Visibility: **private**




### fetchData

    mixed MediaMath\TerminalOneAPI\Pagination\Pagination::fetchData(array $custom_options)





* Visibility: **private**


#### Arguments
* $custom_options **array**


