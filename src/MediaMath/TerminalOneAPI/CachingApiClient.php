<?php

namespace MediaMath\TerminalOneAPI;

use MediaMath\TerminalOneAPI\Infrastructure\Decodable;
use MediaMath\TerminalOneAPI\Infrastructure\Transportable;
use MediaMath\TerminalOneAPI\Infrastructure\Clientable;
use MediaMath\TerminalOneAPI\Infrastructure\Cacheable;
use MediaMath\TerminalOneAPI\Infrastructure\ApiObject;
use MediaMath\TerminalOneAPI\Decoder\DefaultResponseDecoder;

class CachingApiClient implements Clientable
{

    private $api_client, $cache, $decoder, $unique_id;

    public function __construct(Transportable $transport, Cacheable $cache, Decodable $decoder = null)
    {

        $this->cache = $cache;
        $this->decoder = $decoder ?: new DefaultResponseDecoder();
        $this->api_client = new ApiClient($transport, $this->decoder);
        $this->unique_id = $transport->authUniqueId();

    }

    public function read(ApiObject $endpoint, Decodable $decoder = null)
    {
        $key = $endpoint->uri() . json_encode($endpoint->options()) . $this->unique_id;

        $decoder = $decoder ?: $this->decoder;

        if ($this->cache->retrieve($key)) {
            return $decoder->decode($this->cache->retrieve($key));
        }

        $data = $this->api_client->read($endpoint, $decoder);

        $this->cache->store($key, $data);

        return $decoder->decode($data);

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