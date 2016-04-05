MediaMath\TerminalOneAPI\Cache\DoctrineXCacheCache
===============

Class DoctrineXCacheCache




* Class name: DoctrineXCacheCache
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

    mixed MediaMath\TerminalOneAPI\Cache\DoctrineXCacheCache::__construct(\MediaMath\TerminalOneAPI\Cache\TimePeriod $ttl)

DoctrineXCacheCache constructor.



* Visibility: **public**


#### Arguments
* $ttl **[MediaMath\TerminalOneAPI\Cache\TimePeriod](MediaMath-TerminalOneAPI-Cache-TimePeriod.md)**



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


