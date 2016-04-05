MediaMath\TerminalOneAPI\Decoder\DefaultResponseDecoder
===============

Class DefaultResponseDecoder




* Class name: DefaultResponseDecoder
* Namespace: MediaMath\TerminalOneAPI\Decoder
* This class implements: [MediaMath\TerminalOneAPI\Infrastructure\Decodable](MediaMath-TerminalOneAPI-Infrastructure-Decodable.md)






Methods
-------


### decode

    mixed MediaMath\TerminalOneAPI\Infrastructure\Decodable::decode(\MediaMath\TerminalOneAPI\Infrastructure\HttpResponse $api_response)





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Decodable](MediaMath-TerminalOneAPI-Infrastructure-Decodable.md)


#### Arguments
* $api_response **[MediaMath\TerminalOneAPI\Infrastructure\HttpResponse](MediaMath-TerminalOneAPI-Infrastructure-HttpResponse.md)**



### getMetaFromXmlResponse

    \MediaMath\TerminalOneAPI\Infrastructure\ApiResponse MediaMath\TerminalOneAPI\Decoder\DefaultResponseDecoder::getMetaFromXmlResponse(\MediaMath\TerminalOneAPI\Infrastructure\HttpResponse $api_response)





* Visibility: **private**


#### Arguments
* $api_response **[MediaMath\TerminalOneAPI\Infrastructure\HttpResponse](MediaMath-TerminalOneAPI-Infrastructure-HttpResponse.md)**



### getMetaFromJSONResponse

    \MediaMath\TerminalOneAPI\Infrastructure\ApiResponse MediaMath\TerminalOneAPI\Decoder\DefaultResponseDecoder::getMetaFromJSONResponse(\MediaMath\TerminalOneAPI\Infrastructure\HttpResponse $api_response)





* Visibility: **private**


#### Arguments
* $api_response **[MediaMath\TerminalOneAPI\Infrastructure\HttpResponse](MediaMath-TerminalOneAPI-Infrastructure-HttpResponse.md)**



### mergeMetaInfo

    mixed MediaMath\TerminalOneAPI\Decoder\DefaultResponseDecoder::mergeMetaInfo($http_code, array $meta)





* Visibility: **private**


#### Arguments
* $http_code **mixed**
* $meta **array**


