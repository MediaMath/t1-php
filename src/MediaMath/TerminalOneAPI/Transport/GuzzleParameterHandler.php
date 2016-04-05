<?php

namespace MediaMath\TerminalOneAPI\Transport;

use MediaMath\TerminalOneAPI\Infrastructure\Authenticable;
use MediaMath\TerminalOneAPI\Infrastructure\CookieAuthenticable;
use MediaMath\TerminalOneAPI\Infrastructure\OAuthAuthenticable;
use GuzzleHttp\Cookie\CookieJar;

/**
 * Class GuzzleParameterHandler
 * @package MediaMath\TerminalOneAPI\Transport
 */
class GuzzleParameterHandler
{

    /**
     * @var Authenticable
     */
    private $authenticator;

    /**
     * GuzzleParameterHandler constructor.
     * @param Authenticable $authenticator
     */
    public function __construct(Authenticable $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    /**
     * @param $options
     * @param $uri
     * @return mixed
     */
    public function read($options, $uri)
    {

        $options = array_merge(array_filter($options), $this->getParamsFromUri($uri));

        return array_filter([
            'cookies' => $this->cookies(),
            'headers' => $this->headers(),
            'query' => $this->queryString($options)
        ]);

    }

    /**
     * @param $options
     * @return mixed
     */
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

    /**
     * @return null|static
     */
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

    /**
     * @return array
     */
    private function headers()
    {

        if ($this->authenticator instanceof OAuthAuthenticable) {
            return array_merge(['Accept' => 'application/vnd.mediamath.v1+json'], $this->authenticator->headers());
        }

        return ['Accept' => 'application/vnd.mediamath.v1+json'];
    }

    /**
     * @param $options
     * @return mixed
     */
    private function queryString($options)
    {

        if ($this->authenticator instanceof OAuthAuthenticable) {
            return array_merge($options, $this->authenticator->queryStringParams());
        }

        return $options;
    }

    /**
     * @param $options
     * @return mixed
     */
    private function formParams($options)
    {
        return $options;
    }

    /**
     * @param $uri
     * @return array
     */
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