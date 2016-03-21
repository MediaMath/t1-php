<?php

namespace MediaMath\TerminalOneAPI\RecursionFetcher;

use MediaMath\TerminalOneAPI\Infrastructure\ApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\Decodable;
use MediaMath\TerminalOneAPI\Infrastructure\DefaultDecodable;
use MediaMath\TerminalOneAPI\Infrastructure\JSONDecodable;
use MediaMath\TerminalOneAPI\Infrastructure\RecursiveFetchable;
use MediaMath\TerminalOneAPI\Infrastructure\Transportable;
use MediaMath\TerminalOneAPI\Infrastructure\XMLDecodable;

class RecursiveFetcher implements RecursiveFetchable
{

    private $fetcher;

    public function __construct(Decodable $decoder)
    {

        if ($decoder instanceof JSONDecodable) {
            $this->fetcher = new RecursiveJSONResponseFetcher($decoder);
        }

        if ($decoder instanceof XMLDecodable) {
            $this->fetcher = new RecursiveXMLResponseFetcher($decoder);
        }

        if ($decoder instanceof DefaultDecodable) {
            $this->fetcher = new RecursiveDefaultResponseFetcher($decoder);
        }

    }

    public function fetch(Transportable $transport, ApiObject $endpoint)
    {

        return $this->fetcher->fetch($transport, $endpoint);

    }

}