<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

/**
 * Class DoctrineAPICache
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
trait DoctrineAPICache
{

    /**
     * @var
     */
    private $cache;

    /**
     * @var
     */
    private $ttl;

    /**
     * @param $key
     * @param $data
     */
    public function store($key, $data)
    {
        $this->cache->save($key, $data, $this->ttl);

    }

    /**
     * @param $key
     * @return null
     */
    public function retrieve($key)
    {

        if ($this->cache->contains($key)) {
            return $this->cache->fetch($key);
        }

        return null;

    }

}