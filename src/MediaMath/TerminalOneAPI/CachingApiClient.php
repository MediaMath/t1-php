<?php

namespace MediaMath\TerminalOneAPI;

use MediaMath\TerminalOneAPI\Infrastructure\Decodable;
use MediaMath\TerminalOneAPI\Infrastructure\Transportable;
use MediaMath\TerminalOneAPI\Infrastructure\Clientable;
use MediaMath\TerminalOneAPI\Infrastructure\Cacheable;

class CachingApiClient implements Clientable
{

    private $api_client, $cache, $decoder, $unique_id;

    public function __construct(Transportable $transport, Cacheable $cache, Decodable $decoder = null)
    {

        $this->cache = $cache;
        $this->decoder = $decoder;
        $this->api_client = new ApiClient($transport, $this->decoder);
        $this->unique_id = $transport->authUniqueId();

    }

    public function read($endpoint, $options)
    {
        $key = $endpoint . json_encode($options) . get_class($this->decoder) . $this->unique_id;

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