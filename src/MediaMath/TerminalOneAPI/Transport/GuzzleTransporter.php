<?php

namespace MediaMath\TerminalOneAPI\Transport;

use GuzzleHttp\Exception\RequestException;
use MediaMath\TerminalOneAPI\Infrastructure\Transportable;
use MediaMath\TerminalOneAPI\Infrastructure\Authenticable;

use GuzzleHttp\Client;

class GuzzleTransporter implements Transportable
{

    private $guzzle, $authenticator, $parameter_handler;

    public function __construct(Authenticable $authenticator)
    {
        $this->guzzle = new Client();
        $this->authenticator = $authenticator;
        $this->parameter_handler = new GuzzleParameterHandler($authenticator);
    }

    public function read($url, $options)
    {

        try {
            $res = $this->guzzle->request('GET', $url, $this->parameter_handler->read($options, $url));

            return $res->getBody()->getContents();

        } catch (RequestException $e) {

            return $e->getResponse()->getBody()->getContents();
        }

    }

    public function create($url, $data)
    {

        try {
            $res = $this->guzzle->request('POST', $url, $this->parameter_handler->post($data));

            return $res->getBody()->getContents();
        } catch (RequestException $e) {
            return $e->getResponse()->getBody()->getContents();
        }

    }

    public function update($url, $data)
    {

        try {
            $res = $this->guzzle->request('POST', $url, $this->parameter_handler->post($data));

            return $res->getBody()->getContents();
        } catch (RequestException $e) {
            return $e->getResponse()->getBody()->getContents();
        }

    }

    public function authUniqueId()
    {
        return $this->authenticator->authUniqueId();
    }


}