<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

/**
 * Interface OAuthAuthenticable
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
interface OAuthAuthenticable extends Authenticable
{

    /**
     * @return mixed
     */
    public function queryStringParams();

    /**
     * @return mixed
     */
    public function headers();

}