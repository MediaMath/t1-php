<?php

namespace MediaMath\TerminalOneAPI\Cache;

use MediaMath\TerminalOneAPI\Infrastructure\Cacheable;
use MediaMath\TerminalOneAPI\Infrastructure\DoctrineAPICache;

use Doctrine\Common\Cache;

/**
 * Class DoctrineXCacheCache
 * @package MediaMath\TerminalOneAPI\Cache
 */
class DoctrineXCacheCache implements Cacheable
{

    use DoctrineAPICache;

    /**
     * DoctrineXCacheCache constructor.
     * @param TimePeriod $ttl
     */
    public function __construct(TimePeriod $ttl)
    {

        $this->ttl = $ttl->inSeconds();
        $this->cache = new Cache\XcacheCache();

    }

}