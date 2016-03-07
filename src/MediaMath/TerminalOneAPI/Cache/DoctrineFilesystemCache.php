<?php

namespace Mediamath\TerminalOneAPI\Cache;

use Mediamath\TerminalOneAPI\Infrastructure\Cacheable;
use Mediamath\TerminalOneAPI\Infrastructure\DoctrineAPICache;

use Doctrine\Common\Cache;

class DoctrineFilesystemCache implements Cacheable
{

    use DoctrineAPICache;

    public function __construct($ttl, $cache_path)
    {

        $this->ttl = $ttl;
        $this->cache = new Cache\FilesystemCache($cache_path);

    }

}