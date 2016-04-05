<?php

namespace MediaMath\TerminalOneAPI\Cache;

use MediaMath\TerminalOneAPI\Infrastructure\Cacheable;
use MediaMath\TerminalOneAPI\Infrastructure\DoctrineAPICache;

use Doctrine\Common\Cache;

/**
 * Class DoctrineAPCCache
 * @package MediaMath\TerminalOneAPI\Cache
 */
class DoctrineAPCCache implements Cacheable
{

    use DoctrineAPICache;

    /**
     * DoctrineAPCCache constructor.
     * @param TimePeriod $ttl
     */
    public function __construct(TimePeriod $ttl)
    {

        $this->ttl = $ttl->inSeconds();
        $this->cache = new Cache\ApcCache();

    }

}