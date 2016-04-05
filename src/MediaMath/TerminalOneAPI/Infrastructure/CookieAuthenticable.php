<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

/**
 * Interface CookieAuthenticable
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
interface CookieAuthenticable extends Authenticable
{

    /**
     * @return mixed
     */
    public function cookieValues();

}