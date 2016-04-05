<?php

namespace MediaMath\TerminalOneAPI;

use MediaMath\TerminalOneAPI\Decoder\DefaultResponseDecoder;
use MediaMath\TerminalOneAPI\Infrastructure\ApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\Clientable;
use MediaMath\TerminalOneAPI\Infrastructure\Decodable;
use MediaMath\TerminalOneAPI\Infrastructure\Transportable;
use MediaMath\TerminalOneAPI\Pagination\Paginator;

/**
 * Class ApiClient
 * @package MediaMath\TerminalOneAPI
 */
class ApiClient implements Clientable
{

    /**
     * @var Transportable
     */
    /**
     * @var DefaultResponseDecoder|Transportable
     */
    private $transport, $decoder;

    use Paginator;

    /**
     * ApiClient constructor.
     * @param Transportable $transport
     * @param Decodable|null $decoder
     */
    public function __construct(Transportable $transport, Decodable $decoder = null)
    {

        $this->transport = $transport;
        $this->decoder = $decoder ?: new DefaultResponseDecoder();

    }

    /**
     * @param ApiObject $endpoint
     * @param Decodable|null $decoder
     * @return Infrastructure\ApiResponse
     */
    public function create(ApiObject $endpoint, Decodable $decoder = null)
    {
        $decoder = $decoder ?: $this->decoder;

        return $decoder->decode($this->transport->create($endpoint->create(), $endpoint->options()));
    }

    /**
     * @param ApiObject $endpoint
     * @param Decodable|null $decoder
     * @return Infrastructure\ApiResponse
     */
    public function read(ApiObject $endpoint, Decodable $decoder = null)
    {
        $decoder = $decoder ?: $this->decoder;

        return $decoder->decode($this->transport->read($endpoint->read(), $endpoint->options()));
    }

    /**
     * @param ApiObject $endpoint
     * @param Decodable|null $decoder
     * @return Infrastructure\ApiResponse
     */
    public function update(ApiObject $endpoint, Decodable $decoder = null)
    {
        $decoder = $decoder ?: $this->decoder;

        return $decoder->decode($this->transport->update($endpoint->update(), $endpoint->options()));
    }

}