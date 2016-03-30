<?php

namespace MediaMath\TerminalOneAPI;

use MediaMath\TerminalOneAPI\Decoder\DefaultResponseDecoder;
use MediaMath\TerminalOneAPI\Infrastructure\ApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\Cacheable;
use MediaMath\TerminalOneAPI\Infrastructure\Clientable;
use MediaMath\TerminalOneAPI\Infrastructure\Decodable;
use MediaMath\TerminalOneAPI\Infrastructure\Transportable;
use MediaMath\TerminalOneAPI\Pagination\Paginator;

class CachingApiClient implements Clientable
{

    private $api_client, $cache, $decoder, $unique_id;

    use Paginator;

    public function __construct(Transportable $transport, Cacheable $cache, Decodable $decoder = null)
    {

        $this->cache = $cache;
        $this->decoder = $decoder ?: new DefaultResponseDecoder();
        $this->api_client = new ApiClient($transport, $this->decoder);
        $this->unique_id = $transport->authUniqueId();

    }

    public function read(ApiObject $endpoint, Decodable $decoder = null)
    {

        $decoder = $decoder ?: $this->decoder;

        $key = $endpoint->uri() . json_encode($endpoint->options()) . $this->unique_id . get_class($decoder);

        if ($this->cache->retrieve($key)) {
            return $this->cache->retrieve($key);
        }

        $data = $this->api_client->read($endpoint, $decoder);

        $this->cache->store($key, $data);

        return $data;

    }

    public function create(ApiObject $endpoint, Decodable $decoder = null)
    {
        return $this->api_client->create($endpoint, $decoder);
    }

    public function update(ApiObject $endpoint, Decodable $decoder = null)
    {
        return $this->api_client->update($endpoint, $decoder);
    }

}