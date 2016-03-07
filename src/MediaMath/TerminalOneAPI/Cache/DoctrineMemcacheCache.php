<?php

namespace Mediamath\TerminalOneAPI\Cache;

use Mediamath\TerminalOneAPI\Infrastructure\Cacheable;
use Mediamath\TerminalOneAPI\Infrastructure\DoctrineAPICache;

use Doctrine\Common\Cache;

class DoctrineMemcacheCache implements Cacheable
{

    use DoctrineAPICache;

    public function __construct($ttl)
    {

        $this->ttl = $ttl;
        $this->cache = new Cache\MemcacheCache();

    }

}