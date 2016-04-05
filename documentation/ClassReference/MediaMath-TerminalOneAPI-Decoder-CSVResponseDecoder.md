MediaMath\TerminalOneAPI\Decoder\CSVResponseDecoder
===============

Class CSVResponseDecoder




* Class name: CSVResponseDecoder
* Namespace: MediaMath\TerminalOneAPI\Decoder
* This class implements: [MediaMath\TerminalOneAPI\Infrastructure\Decodable](MediaMath-TerminalOneAPI-Infrastructure-Decodable.md)




Properties
----------


### $flag

    private integer $flag





* Visibility: **private**


Methods
-------


### __construct

    mixed MediaMath\TerminalOneAPI\Decoder\CSVResponseDecoder::__construct(integer $flag)

CSVResponseDecoder constructor.



* Visibility: **public**


#### Arguments
* $flag **integer**



### decode

    mixed MediaMath\TerminalOneAPI\Infrastructure\Decodable::decode(\MediaMath\TerminalOneAPI\Infrastructure\HttpResponse $api_response)





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Decodable](MediaMath-TerminalOneAPI-Infrastructure-Decodable.md)


#### Arguments
* $api_response **[MediaMath\TerminalOneAPI\Infrastructure\HttpResponse](MediaMath-TerminalOneAPI-Infrastructure-HttpResponse.md)**



### loadCSVData

    array MediaMath\TerminalOneAPI\Decoder\CSVResponseDecoder::loadCSVData($csv)





* Visibility: **private**


#### Arguments
* $csv **mixed**



### getHeadings

    array MediaMath\TerminalOneAPI\Decoder\CSVResponseDecoder::getHeadings($data)





* Visibility: **private**


#### Arguments
* $data **mixed**



### getData

    mixed MediaMath\TerminalOneAPI\Decoder\CSVResponseDecoder::getData($data)





* Visibility: **private**


#### Arguments
* $data **mixed**


