<?php

namespace MediaMath\TerminalOneAPI;

use MediaMath\TerminalOneAPI\Decoder\DefaultResponseDecoder;
use MediaMath\TerminalOneAPI\Infrastructure\ApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\Decodable;
use MediaMath\TerminalOneAPI\Infrastructure\Transportable;
use MediaMath\TerminalOneAPI\Infrastructure\Clientable;
use MediaMath\TerminalOneAPI\RecursionFetcher\RecursiveFetcher;

class ApiClient implements Clientable
{

    private $transport, $decoder;

    public function __construct(Transportable $transport, Decodable $decoder = null)
    {

        $this->transport = $transport;
        $this->decoder = $decoder ?: new DefaultResponseDecoder();

    }

    public function create(ApiObject $endpoint, Decodable $decoder = null)
    {
        $decoder = $decoder ?: $this->decoder;

        return $decoder->decode($this->transport->create($endpoint->create(), $endpoint->options()));
    }

    public function read(ApiObject $endpoint, Decodable $decoder = null)
    {

        $decoder = $decoder ?: $this->decoder;

        $fetcher = new RecursiveFetcher($decoder);

        return $fetcher->fetch($this->transport, $endpoint);

    }

    public function update(ApiObject $endpoint, Decodable $decoder = null)
    {
        $decoder = $decoder ?: $this->decoder;

        return $decoder->decode($this->transport->update($endpoint->update(), $endpoint->options()));
    }

}