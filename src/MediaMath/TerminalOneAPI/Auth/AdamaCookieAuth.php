<?php

namespace Mediamath\TerminalOneAPI\Auth;


use Mediamath\TerminalOneAPI\Infrastructure\CookieAuthenticable;

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

}