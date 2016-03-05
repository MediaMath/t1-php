<?php

namespace Mediamath\TerminalOneAPI\Transport;

use GuzzleHttp\Cookie\CookieJar;
use Mediamath\TerminalOneAPI\Infrastructure\CookieAuthenticable;
use Mediamath\TerminalOneAPI\Infrastructure\OAuthAuthenticable;
use Mediamath\TerminalOneAPI\Infrastructure\Transportable;
use Mediamath\TerminalOneAPI\Infrastructure\Authenticable;

use GuzzleHttp\Client;

class GuzzleTransporter implements Transportable
{

    private $guzzle, $authenticator;

    public function __construct(Authenticable $authenticator)
    {
        $this->guzzle = new Client();
        $this->authenticator = $authenticator;
    }

    public function read($url, $options)
    {

        $res = $this->guzzle->request('GET', $url, $this->options($options));

        return $res->getBody()->getContents();

    }

    public function create($url, $data)
    {
        // TODO: Implement create() method.
    }

    public function update($url, $data)
    {
        // TODO: Implement update() method.
    }

    private function options($options)
    {

        if ($this->authenticator instanceof CookieAuthenticable) {

            $cookieJar = CookieJar::fromArray(
                $this->authenticator->cookieValues(),
                'mediamath.com'
            );

            return [
                'cookies' => $cookieJar,
                'headers' => ['Accept' => 'application/vnd.mediamath.v1+json'],
                'query' => $options
            ];
        }

        if ($this->authenticator instanceof OAuthAuthenticable) {

            return [
                'headers' => array_merge(['Accept' => 'application/vnd.mediamath.v1+json'], $this->authenticator->headers()),
                'query' => array_merge($options, $this->authenticator->queryStringParams())
            ];

        }

    }

}