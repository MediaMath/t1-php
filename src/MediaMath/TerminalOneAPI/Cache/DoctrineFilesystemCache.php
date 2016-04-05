<?php

namespace MediaMath\TerminalOneAPI\Cache;

use MediaMath\TerminalOneAPI\Infrastructure\Cacheable;
use MediaMath\TerminalOneAPI\Infrastructure\DoctrineAPICache;

use Doctrine\Common\Cache;

/**
 * Class DoctrineFilesystemCache
 * @package MediaMath\TerminalOneAPI\Cache
 */
class DoctrineFilesystemCache implements Cacheable
{

    use DoctrineAPICache;

    /**
     * DoctrineFilesystemCache constructor.
     * @param TimePeriod $ttl
     * @param $cache_path
     */
    public function __construct(TimePeriod $ttl, $cache_path)
    {

        $this->ttl = $ttl->inSeconds();
        $this->cache = new Cache\FilesystemCache($cache_path);

    }

}