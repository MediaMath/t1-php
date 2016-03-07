<?php

namespace Mediamath\TerminalOneAPI;

use Mediamath\TerminalOneAPI\Infrastructure\Decodable;
use Mediamath\TerminalOneAPI\Infrastructure\Transportable;
use Mediamath\TerminalOneAPI\Infrastructure\Clientable;
use Mediamath\TerminalOneAPI\Infrastructure\Cacheable;

class CachingApiClient implements Clientable
{

    private $api_client, $cache;

    public function __construct(Transportable $transport, Cacheable $cache, Decodable $formatter = null)
    {

        $this->api_client = new ApiClient($transport, $formatter);
        $this->cache = $cache;

    }

    public function read($endpoint, $options)
    {
        $key = MD5($endpoint . json_encode($options));

        if ($this->cache->retrieve($key)) {
            return $this->cache->retrieve($key);
        }

        $data = $this->api_client->read($endpoint, $options);

        $this->cache->store($key, $data);

        return $data;

    }

    public function create($endpoint, $data)
    {
        return $this->api_client->create($endpoint, $data);
    }

    public function update($endpoint, $data)
    {
        return $this->api_client->update($endpoint, $data);
    }

}