<?php

namespace MediaMath\TerminalOneAPI\Transport;

use MediaMath\TerminalOneAPI\Infrastructure\Authenticable;
use MediaMath\TerminalOneAPI\Infrastructure\CookieAuthenticable;
use MediaMath\TerminalOneAPI\Infrastructure\OAuthAuthenticable;
use GuzzleHttp\Cookie\CookieJar;

class GuzzleParameterHandler
{

    private $authenticator;

    public function __construct(Authenticable $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    public function read($options, $uri)
    {

        $options = array_merge(array_filter($options), $this->getParamsFromUri($uri));

        return array_filter([
            'cookies' => $this->cookies(),
            'headers' => $this->headers(),
            'query' => $this->queryString($options)
        ]);

    }

    public function post($options)
    {
        $arr = [
            'cookies' => $this->cookies(),
            'headers' => $this->headers(),
            'query' => $this->queryString($options),
            'form_params' => $this->formParams($options)
        ];

        return array_filter($arr);

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