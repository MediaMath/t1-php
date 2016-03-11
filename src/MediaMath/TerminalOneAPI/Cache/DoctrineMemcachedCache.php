<?php

namespace Mediamath\TerminalOneAPI\Cache;

use Mediamath\TerminalOneAPI\Infrastructure\Cacheable;
use Mediamath\TerminalOneAPI\Infrastructure\DoctrineAPICache;

use Doctrine\Common\Cache;

class DoctrineMemcachedCache implements Cacheable
{

    use DoctrineAPICache;

    public function __construct(TimePeriod $ttl)
    {

        $this->ttl = $ttl->inSeconds();
        $this->cache = new Cache\MemcachedCache();

    }

}