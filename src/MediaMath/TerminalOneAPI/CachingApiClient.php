<?php

namespace MediaMath\TerminalOneAPI;

use MediaMath\TerminalOneAPI\Decoder\DefaultResponseDecoder;
use MediaMath\TerminalOneAPI\Infrastructure\ApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\Cacheable;
use MediaMath\TerminalOneAPI\Infrastructure\Clientable;
use MediaMath\TerminalOneAPI\Infrastructure\Decodable;
use MediaMath\TerminalOneAPI\Infrastructure\Transportable;
use MediaMath\TerminalOneAPI\Pagination\Paginator;
use MediaMath\TerminalOneAPI\Infrastructure\ObjectIdentifier;

/**
 * Class CachingApiClient
 * @package MediaMath\TerminalOneAPI
 */
class CachingApiClient implements Clientable
{
    use Paginator;

    /**
     * @var ApiClient
     */
    private $api_client;
    /**
     * @var Cacheable
     */
    private $cache;
    /**
     * @var DefaultResponseDecoder
     */
    private $decoder;
    /**
     * @var mixed
     */
    private $unique_id;

    /**
     * CachingApiClient constructor.
     * @param Transportable $transport
     * @param Cacheable $cache
     * @param Decodable|null $decoder
     */
    public function __construct(Transportable $transport, Cacheable $cache, Decodable $decoder = null)
    {

        $this->cache = $cache;
        $this->decoder = $decoder ?: new DefaultResponseDecoder();
        $this->api_client = new ApiClient($transport, $this->decoder);
        $this->unique_id = $transport->authUniqueId();

    }

    /**
     * @param ApiObject $endpoint
     * @param Decodable|null $decoder
     * @return Infrastructure\ApiResponse|mixed
     */
    public function read(ApiObject $endpoint, Decodable $decoder = null)
    {

        $decoder = $decoder ?: $this->decoder;

        $key = $endpoint->uri() . json_encode($endpoint->options()) . $this->unique_id . ObjectIdentifier::identify($decoder);

        if ($this->cache->retrieve($key)) {
            return $this->cache->retrieve($key);
        }

        $data = $this->api_client->read($endpoint, $decoder);

        $this->cache->store($key, $data);

        return $data;

    }

    /**
     * @param ApiObject $endpoint
     * @param Decodable|null $decoder
     * @return Infrastructure\ApiResponse
     */
    public function create(ApiObject $endpoint, Decodable $decoder = null)
    {
        return $this->api_client->create($endpoint, $decoder);
    }

    /**
     * @param ApiObject $endpoint
     * @param Decodable|null $decoder
     * @return Infrastructure\ApiResponse
     */
    public function update(ApiObject $endpoint, Decodable $decoder = null)
    {
        return $this->api_client->update($endpoint, $decoder);
    }

}