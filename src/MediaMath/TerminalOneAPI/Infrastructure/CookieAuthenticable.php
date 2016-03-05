<?php

namespace Mediamath\TerminalOneAPI\Infrastructure;

interface CookieAuthenticable extends Authenticable
{

    public function cookieValues();

}