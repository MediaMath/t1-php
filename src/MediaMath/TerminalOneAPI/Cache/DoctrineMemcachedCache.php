<?php

namespace MediaMath\TerminalOneAPI\Cache;

use MediaMath\TerminalOneAPI\Infrastructure\Cacheable;
use MediaMath\TerminalOneAPI\Infrastructure\DoctrineAPICache;

use Doctrine\Common\Cache;

/**
 * Class DoctrineMemcachedCache
 * @package MediaMath\TerminalOneAPI\Cache
 */
class DoctrineMemcachedCache implements Cacheable
{

    use DoctrineAPICache;

    /**
     * DoctrineMemcachedCache constructor.
     * @param TimePeriod $ttl
     * @param string $pool
     */
    public function __construct(TimePeriod $ttl, $pool = 't1_api')
    {

        $this->ttl = $ttl->inSeconds();
        $this->cache = new Cache\MemcachedCache();

        $memcached = new \Memcached($pool);

        $this->cache->setMemcached($memcached);

    }

}