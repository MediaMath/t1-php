<?php

namespace MediaMath\TerminalOneAPI\Auth;


use MediaMath\TerminalOneAPI\Infrastructure\CookieAuthenticable;

class AdamaCookieAuth implements CookieAuthenticable
{

    private $session_id;

    public function __construct($session_id)
    {
        $this->session_id = $session_id;
    }

    public function cookieValues()
    {
        return ['adama_session' => $this->session_id];
    }

    public function authUniqueId()
    {
        return $this->session_id;
    }

}