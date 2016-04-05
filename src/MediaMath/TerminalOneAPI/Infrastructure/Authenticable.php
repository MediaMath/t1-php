<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

/**
 * Interface Authenticable
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
interface Authenticable
{
    /**
     * @return mixed
     */
    public function authUniqueId();
}