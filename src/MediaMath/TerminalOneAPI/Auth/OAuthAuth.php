<?php

namespace MediaMath\TerminalOneAPI\Auth;

use MediaMath\TerminalOneAPI\Infrastructure\OAuthAuthenticable;

/**
 * Class OAuthAuth
 * @package MediaMath\TerminalOneAPI\Auth
 */
class OAuthAuth implements OAuthAuthenticable
{

    /**
     * @var
     */
    private $api_key;

    /**
     * @var
     */
    private $token;

    /**
     * OAuthAuth constructor.
     * @param $api_key
     * @param $token
     */
    public function __construct($api_key, $token)
    {
        $this->api_key = $api_key;
        $this->token = $token;
    }

    /**
     * @return array
     */
    public function headers()
    {
        return ['Authorization' => 'Bearer ' . $this->token];
    }

    /**
     * @return array
     */
    public function queryStringParams()
    {
        return ['api_key' => $this->api_key];
    }

    /**
     * @return string
     */
    public function authUniqueId()
    {
        return $this->api_key . $this->token;
    }

}