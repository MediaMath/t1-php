<?php


namespace MediaMath\TerminalOneAPI\Infrastructure;


class HttpResponse
{

    private $headers;
    private $body;
    private $http_code;

    public function __construct(HttpResponseHeaders $headers, $body, $http_code)
    {
        $this->headers = $headers;
        $this->body = $body;
        $this->http_code = $http_code;
    }

    public function headers()
    {
        return $this->headers;
    }

    public function body()
    {
        return $this->body;
    }

    public function httpCode() {
        return $this->http_code;
    }

}