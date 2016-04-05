<?php


namespace MediaMath\TerminalOneAPI\Infrastructure;


/**
 * Class HttpResponse
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
class HttpResponse
{

    /**
     * @var HttpResponseHeaders
     */
    private $headers;

    /**
     * @var
     */
    private $body;
    
    /**
     * @var
     */
    private $http_code;

    /**
     * HttpResponse constructor.
     * @param HttpResponseHeaders $headers
     * @param $body
     * @param $http_code
     */
    public function __construct(HttpResponseHeaders $headers, $body, $http_code)
    {
        $this->headers = $headers;
        $this->body = $body;
        $this->http_code = $http_code;
    }

    /**
     * @return HttpResponseHeaders
     */
    public function headers()
    {
        return $this->headers;
    }

    /**
     * @return mixed
     */
    public function body()
    {
        return $this->body;
    }

    /**
     * @return mixed
     */
    public function httpCode() {
        return $this->http_code;
    }

}