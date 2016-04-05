<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

/**
 * Interface Cacheable
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
interface Cacheable
{
    /**
     * @param $key
     * @param $data
     * @return mixed
     */
    public function store($key, $data);

    /**
     * @param $key
     * @return mixed
     */
    public function retrieve($key);
}