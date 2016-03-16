<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

interface OAuthAuthenticable extends Authenticable
{

    public function queryStringParams();

    public function headers();

}