<?php

namespace MediaMath\TerminalOneAPI\Transport;

use GuzzleHttp\Exception\RequestException;
use MediaMath\TerminalOneAPI\Infrastructure\HttpErrorResponse;
use MediaMath\TerminalOneAPI\Infrastructure\HttpResponse;
use MediaMath\TerminalOneAPI\Infrastructure\HttpResponseHeaders;
use MediaMath\TerminalOneAPI\Infrastructure\Transportable;
use MediaMath\TerminalOneAPI\Infrastructure\Authenticable;

use GuzzleHttp\Client;

/**
 * Class GuzzleTransporter
 * @package MediaMath\TerminalOneAPI\Transport
 */
class GuzzleTransporter implements Transportable
{

    /**
     * @var Client
     */
    private $guzzle;

    /**
     * @var Authenticable
     */
    private $authenticator;

    /**
     * @var GuzzleParameterHandler
     */
    private $parameter_handler;

    /**
     * GuzzleTransporter constructor.
     * @param Authenticable $authenticator
     */
    public function __construct(Authenticable $authenticator)
    {
        $this->guzzle = new Client();
        $this->authenticator = $authenticator;
        $this->parameter_handler = new GuzzleParameterHandler($authenticator);
    }

    /**
     * @param $url
     * @param $options
     * @return HttpErrorResponse|HttpResponse
     */
    public function read($url, $options)
    {

        try {
            $res = $this->guzzle->request('GET', $url, $this->parameter_handler->read($options, $url));

            return new HttpResponse($this->headers($res->getHeaders()), $res->getBody()->getContents(), $res->getStatusCode());

        } catch (RequestException $e) {

            return new HttpErrorResponse($this->headers($e->getResponse()->getHeaders()), $e->getResponse()->getBody()->getContents(), $e->getCode());

        }

    }

    /**
     * @param $url
     * @param $data
     * @return HttpErrorResponse|HttpResponse
     */
    public function create($url, $data)
    {

        try {
            $res = $this->guzzle->request('POST', $url, $this->parameter_handler->post($data));

            return new HttpResponse($this->headers($res->getHeaders()), $res->getBody()->getContents(), $res->getStatusCode());

        } catch (RequestException $e) {

            return new HttpErrorResponse($this->headers($e->getResponse()->getHeaders()), $e->getResponse()->getBody()->getContents(), $e->getCode());

        }

    }

    /**
     * @param $url
     * @param $data
     * @return HttpErrorResponse|HttpResponse
     */
    public function update($url, $data)
    {

        try {
            $res = $this->guzzle->request('POST', $url, $this->parameter_handler->post($data));

            return new HttpResponse($this->headers($res->getHeaders()), $res->getBody()->getContents(), $res->getStatusCode());

        } catch (RequestException $e) {

            return new HttpErrorResponse($this->headers($e->getResponse()->getHeaders()), $e->getResponse()->getBody()->getContents(), $e->getCode());

        }

    }

    /**
     * @return mixed
     */
    public function authUniqueId()
    {
        return $this->authenticator->authUniqueId();
    }

    /**
     * @param $headers
     * @return HttpResponseHeaders
     */
    private function headers($headers)
    {
        $tmp = [];

        foreach ($headers AS $key => $value) {
            $tmp[strtolower(str_replace('-', '_', $key))] = $value[0];
        }

        return new HttpResponseHeaders($tmp);
    }

}