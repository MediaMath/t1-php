<?php

namespace MediaMath\TerminalOneAPI\Cache;

use MediaMath\TerminalOneAPI\Infrastructure\Cacheable;
use MediaMath\TerminalOneAPI\Infrastructure\DoctrineAPICache;

use Doctrine\Common\Cache;

class DoctrineMemcachedCache implements Cacheable
{

    use DoctrineAPICache;

    public function __construct(TimePeriod $ttl, $pool = 't1_api')
    {

        $this->ttl = $ttl->inSeconds();
        $this->cache = new Cache\MemcachedCache();

        $memcached = new \Memcached($pool);

        $this->cache->setMemcached($memcached);

    }

}