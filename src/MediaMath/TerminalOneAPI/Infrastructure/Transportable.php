<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

/**
 * Interface Transportable
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
interface Transportable
{

    /**
     * Transportable constructor.
     * @param Authenticable $authenticator
     */
    public function __construct(Authenticable $authenticator);

    /**
     * @param $uri
     * @param $data
     * @return mixed
     */
    public function create($uri, $data);

    /**
     * @param $uri
     * @param $options
     * @return mixed
     */
    public function read($uri, $options);

    /**
     * @param $uri
     * @param $data
     * @return mixed
     */
    public function update($uri, $data);

    /**
     * @return mixed
     */
    public function authUniqueId();

}