MediaMath\TerminalOneAPI\Infrastructure\HttpErrorResponse
===============

Class HttpErrorResponse




* Class name: HttpErrorResponse
* Namespace: MediaMath\TerminalOneAPI\Infrastructure
* Parent class: [MediaMath\TerminalOneAPI\Infrastructure\HttpResponse](MediaMath-TerminalOneAPI-Infrastructure-HttpResponse.md)





Properties
----------


### $error_code

    private  $error_code





* Visibility: **private**


### $headers

    private \MediaMath\TerminalOneAPI\Infrastructure\HttpResponseHeaders $headers





* Visibility: **private**


### $body

    private  $body





* Visibility: **private**


### $http_code

    private  $http_code





* Visibility: **private**


Methods
-------


### __construct

    mixed MediaMath\TerminalOneAPI\Infrastructure\HttpResponse::__construct(\MediaMath\TerminalOneAPI\Infrastructure\HttpResponseHeaders $headers, $body, $http_code)

HttpResponse constructor.



* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\HttpResponse](MediaMath-TerminalOneAPI-Infrastructure-HttpResponse.md)


#### Arguments
* $headers **[MediaMath\TerminalOneAPI\Infrastructure\HttpResponseHeaders](MediaMath-TerminalOneAPI-Infrastructure-HttpResponseHeaders.md)**
* $body **mixed**
* $http_code **mixed**



### errorCode

    mixed MediaMath\TerminalOneAPI\Infrastructure\HttpErrorResponse::errorCode()





* Visibility: **public**




### headers

    \MediaMath\TerminalOneAPI\Infrastructure\HttpResponseHeaders MediaMath\TerminalOneAPI\Infrastructure\HttpResponse::headers()





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\HttpResponse](MediaMath-TerminalOneAPI-Infrastructure-HttpResponse.md)




### body

    mixed MediaMath\TerminalOneAPI\Infrastructure\HttpResponse::body()





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\HttpResponse](MediaMath-TerminalOneAPI-Infrastructure-HttpResponse.md)




### httpCode

    mixed MediaMath\TerminalOneAPI\Infrastructure\HttpResponse::httpCode()





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\HttpResponse](MediaMath-TerminalOneAPI-Infrastructure-HttpResponse.md)



