<?php

namespace MediaMath\TerminalOneAPI\Cache;

use MediaMath\TerminalOneAPI\Infrastructure\Cacheable;
use MediaMath\TerminalOneAPI\Infrastructure\DoctrineAPICache;

use Doctrine\Common\Cache;

class DoctrineFilesystemCache implements Cacheable
{

    use DoctrineAPICache;

    public function __construct(TimePeriod $ttl, $cache_path)
    {

        $this->ttl = $ttl->inSeconds();
        $this->cache = new Cache\FilesystemCache($cache_path);

    }

}