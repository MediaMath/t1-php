MediaMath\TerminalOneAPI\Cache\DoctrineFilesystemCache
===============

Class DoctrineFilesystemCache




* Class name: DoctrineFilesystemCache
* Namespace: MediaMath\TerminalOneAPI\Cache
* This class implements: [MediaMath\TerminalOneAPI\Infrastructure\Cacheable](MediaMath-TerminalOneAPI-Infrastructure-Cacheable.md)




Properties
----------


### $cache

    private  $cache





* Visibility: **private**


### $ttl

    private  $ttl





* Visibility: **private**


Methods
-------


### __construct

    mixed MediaMath\TerminalOneAPI\Cache\DoctrineFilesystemCache::__construct(\MediaMath\TerminalOneAPI\Cache\TimePeriod $ttl, $cache_path)

DoctrineFilesystemCache constructor.



* Visibility: **public**


#### Arguments
* $ttl **[MediaMath\TerminalOneAPI\Cache\TimePeriod](MediaMath-TerminalOneAPI-Cache-TimePeriod.md)**
* $cache_path **mixed**



### store

    mixed MediaMath\TerminalOneAPI\Infrastructure\Cacheable::store($key, $data)





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Cacheable](MediaMath-TerminalOneAPI-Infrastructure-Cacheable.md)


#### Arguments
* $key **mixed**
* $data **mixed**



### retrieve

    mixed MediaMath\TerminalOneAPI\Infrastructure\Cacheable::retrieve($key)





* Visibility: **public**
* This method is defined by [MediaMath\TerminalOneAPI\Infrastructure\Cacheable](MediaMath-TerminalOneAPI-Infrastructure-Cacheable.md)


#### Arguments
* $key **mixed**


