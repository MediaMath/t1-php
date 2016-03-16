<?php

namespace MediaMath\TerminalOneAPI\Auth;

use MediaMath\TerminalOneAPI\Infrastructure\OAuthAuthenticable;

class OAuthAuth implements OAuthAuthenticable
{

    private $api_key, $token;

    public function __construct($api_key, $token)
    {
        $this->api_key = $api_key;
        $this->token = $token;
    }

    public function headers()
    {
        return ['Authorization' => 'Bearer ' . $this->token];
    }

    public function queryStringParams()
    {
        return ['api_key' => $this->api_key];
    }

    public function authUniqueId()
    {
        return $this->api_key . $this->token;
    }

}