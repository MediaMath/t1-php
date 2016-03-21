<?php

namespace MediaMath\TerminalOneAPI\RecursionFetcher;

use MediaMath\TerminalOneAPI\Infrastructure\Decodable;
use MediaMath\TerminalOneAPI\Infrastructure\RecursiveFetchable;
use MediaMath\TerminalOneAPI\Infrastructure\Transportable;
use MediaMath\TerminalOneAPI\Infrastructure\ApiObject;

class RecursiveDefaultResponseFetcher implements RecursiveFetchable
{

    private $decoder;

    public function __construct(Decodable $decoder)
    {
        $this->decoder = $decoder;
    }

    public function fetch(Transportable $transport, ApiObject $endpoint)
    {
        return $this->decoder->decode($transport->read($endpoint->read(), $endpoint->options()));
    }

}