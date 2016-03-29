<?php

namespace MediaMath\TerminalOneAPI\RecursionFetcher;

use MediaMath\TerminalOneAPI\Infrastructure\RecursiveFetchable;
use MediaMath\TerminalOneAPI\Infrastructure\Transportable;
use MediaMath\TerminalOneAPI\Infrastructure\ApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\Decodable;

class RecursiveJSONResponseFetcher implements RecursiveFetchable
{
    private $decoder;

    public function __construct(Decodable $decoder)
    {
        $this->decoder = $decoder;
    }

    public function fetch(Transportable $transport, ApiObject $endpoint)
    {
        return $this->fetchRecursiveJSON($transport, $endpoint->read(), $endpoint->options());
    }

    private function fetchRecursiveJSON(Transportable $transport, $uri, $options)
    {

        $response = $this->decoder->decode($transport->read($uri, $options));

        if (isset($options['fetch']) && $options['fetch'] == 'all') {

            return $this->fetchEverything($transport, $options, $response);
        }

        return $response;
    }

    private function fetchEverything(Transportable $transport, $options, $response)
    {
        if (isset($response->meta) && isset($response->meta->next_page)) {
            return $this->collateData($transport, $options, $response);
        }

        if (isset($response->data)) {
            return $response->data;
        }

        return null;
    }

    private function collateData(Transportable $transport, $options, $response)
    {
        $data = $this->fetchRecursiveJSON($transport, $response->meta->next_page, $options);

        foreach ($data AS $value) {
            $response->data[] = $value;
        }

        return $response->data;
    }

}