<?php

namespace MediaMath\TerminalOneAPI\Cache;

use MediaMath\TerminalOneAPI\Infrastructure\Cacheable;
use MediaMath\TerminalOneAPI\Infrastructure\DoctrineAPICache;

use Doctrine\Common\Cache;

class DoctrineMemcacheCache implements Cacheable
{

    use DoctrineAPICache;

    public function __construct(TimePeriod $ttl)
    {

        $this->ttl = $ttl->inSeconds();
        $this->cache = new Cache\MemcacheCache();

    }

}