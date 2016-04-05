MediaMath\TerminalOneAPI\Cache\DoctrineMemcacheCache
===============

Class DoctrineMemcacheCache




* Class name: DoctrineMemcacheCache
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

    mixed MediaMath\TerminalOneAPI\Cache\DoctrineMemcacheCache::__construct(\MediaMath\TerminalOneAPI\Cache\TimePeriod $ttl, string $host, integer $port, integer $timeout)

DoctrineMemcacheCache constructor.



* Visibility: **public**


#### Arguments
* $ttl **[MediaMath\TerminalOneAPI\Cache\TimePeriod](MediaMath-TerminalOneAPI-Cache-TimePeriod.md)**
* $host **string**
* $port **integer**
* $timeout **integer**



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


