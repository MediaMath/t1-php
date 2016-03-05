<?php

namespace Mediamath\TerminalOneAPI\Auth;


use Mediamath\TerminalOneAPI\Infrastructure\OAuthAuthenticable;

class OAuthAuth implements OAuthAuthenticable
{

    private $api_key, $bearer;

    public function __construct($api_key, $bearer)
    {
        $this->api_key = $api_key;
        $this->bearer = $bearer;
    }

    public function headers()
    {
        return ['Authorization' => 'Bearer ' . $this->bearer];
    }

    public function queryStringParams()
    {
        return ['api_key' => $this->api_key];
    }

}