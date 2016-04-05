<?php


namespace MediaMath\TerminalOneAPI\Infrastructure;


/**
 * Class HttpErrorResponse
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
class HttpErrorResponse extends HttpResponse
{

    /**
     * @var
     */
    private $error_code;

    /**
     * HttpErrorResponse constructor.
     * @param HttpResponseHeaders $headers
     * @param $body
     * @param $http_code
     */
    public function __construct(HttpResponseHeaders $headers, $body, $http_code)
    {
        parent::__construct($headers, $body, $http_code);

        $this->error_code = $http_code;
    }

    /**
     * @return mixed
     */
    public function errorCode()
    {
        return $this->error_code;
    }

}