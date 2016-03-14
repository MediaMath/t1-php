<?php

namespace Mediamath\TerminalOneAPI\Transport;

use GuzzleHttp\Cookie\CookieJar;
use GuzzleHttp\Exception\RequestException;
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

        $options = array_merge($options, $this->getParamsFromUri($url));

        try {
            $res = $this->guzzle->request('GET', $url, $this->prepareOptionsForRead($options));

            return $res->getBody()->getContents();

        } catch (RequestException $e) {

            return $e->getResponse()->getBody()->getContents();
        }

    }

    public function create($url, $data)
    {

        try {
            $res = $this->guzzle->request('POST', $url, $this->prepareOptionsForPost($data));

            return $res->getBody()->getContents();
        } catch (RequestException $e) {
            return $e->getResponse()->getBody()->getContents();
        }
    }

    public function update($url, $data)
    {
        // TODO: Implement update() method.
    }

    public function authUniqueId()
    {
        return $this->authenticator->authUniqueId();
    }

    private function prepareOptionsForRead($options)
    {
        return array_filter([
            'cookies' => $this->cookies(),
            'headers' => $this->headers(),
            'query' => $this->queryString($options)
        ]);

    }

    private function prepareOptionsForPost($options)
    {
        return array_filter([
            'cookies' => $this->cookies(),
            'headers' => $this->headers(),
            'query' => $this->queryString($options),
            'form_params' => $this->formParams($options)
        ]);

    }

    private function cookies()
    {

        if ($this->authenticator instanceof CookieAuthenticable) {

            $cookieJar = CookieJar::fromArray(
                $this->authenticator->cookieValues(),
                'mediamath.com'
            );

            return $cookieJar;
        }
        return null;
    }

    private function headers()
    {

        if ($this->authenticator instanceof OAuthAuthenticable) {
            return array_merge(['Accept' => 'application/vnd.mediamath.v1+json'], $this->authenticator->headers());
        }

        return ['Accept' => 'application/vnd.mediamath.v1+json'];
    }

    private function queryString($options)
    {

        if ($this->authenticator instanceof OAuthAuthenticable) {
            return array_merge($options, $this->authenticator->queryStringParams());
        }

        return $options;
    }

    private function formParams($options)
    {
        return $options;
    }


    private function getParamsFromUri($uri)
    {

        $parts = explode('?', $uri);

        if (isset($parts[1])) {
            parse_str($parts[1], $output);
            return $output;
        }

        return [];

    }

}