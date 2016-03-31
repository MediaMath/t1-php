<?php

namespace MediaMath\TerminalOneAPI\Cache;

use MediaMath\TerminalOneAPI\Infrastructure\Cacheable;
use MediaMath\TerminalOneAPI\Infrastructure\DoctrineAPICache;

use Doctrine\Common\Cache;

class DoctrineMemcacheCache implements Cacheable
{

    use DoctrineAPICache;

    public function __construct(TimePeriod $ttl, $host = '127.0.0.1', $port = 11211, $timeout = 1)
    {

        $this->ttl = $ttl->inSeconds();
        $this->cache = new Cache\MemcacheCache();

        $memcache = new \Memcache();
        $memcache->connect($host, $port, $timeout);

        $this->cache->setMemcache($memcache);

    }

}