<?php

namespace Mediamath\TerminalOneAPI\Infrastructure;

trait DoctrineAPICache
{

    private $cache, $ttl;

    public function store($key, $data)
    {
        $this->cache->save($key, $data, $this->ttl);

    }

    public function retrieve($key)
    {

        if ($this->cache->contains($key)) {
            return $this->cache->fetch($key);
        }

        return null;

    }

}