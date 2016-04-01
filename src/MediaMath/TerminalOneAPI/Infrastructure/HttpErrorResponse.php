<?php


namespace MediaMath\TerminalOneAPI\Infrastructure;


class HttpErrorResponse extends HttpResponse
{

    private $error_code;

    public function __construct(HttpResponseHeaders $headers, $body, $http_code)
    {
        parent::__construct($headers, $body, $http_code);

        $this->error_code = $http_code;
    }

    public function errorCode()
    {
        return $this->error_code;
    }

}