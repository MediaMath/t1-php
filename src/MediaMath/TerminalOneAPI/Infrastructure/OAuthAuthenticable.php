<?php

namespace Mediamath\TerminalOneAPI\Infrastructure;

interface OAuthAuthenticable extends Authenticable
{

    public function queryStringParams();

    public function headers();

}