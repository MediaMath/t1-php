<?php

namespace MediaMath\TerminalOneAPI\Auth;


use MediaMath\TerminalOneAPI\Infrastructure\CookieAuthenticable;

/**
 * Class AdamaCookieAuth
 * @package MediaMath\TerminalOneAPI\Auth
 */
class AdamaCookieAuth implements CookieAuthenticable
{

    /**
     * @var
     */
    private $session_id;

    /**
     * AdamaCookieAuth constructor.
     * @param $session_id
     */
    public function __construct($session_id)
    {
        $this->session_id = $session_id;
    }

    /**
     * @return array
     */
    public function cookieValues()
    {
        return ['adama_session' => $this->session_id];
    }

    /**
     * @return mixed
     */
    public function authUniqueId()
    {
        return $this->session_id;
    }

}