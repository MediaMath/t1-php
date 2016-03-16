<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

interface CookieAuthenticable extends Authenticable
{

    public function cookieValues();

}