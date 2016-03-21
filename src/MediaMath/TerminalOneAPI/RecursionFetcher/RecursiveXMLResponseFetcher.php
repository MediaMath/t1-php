<?php

namespace MediaMath\TerminalOneAPI\RecursionFetcher;

use MediaMath\TerminalOneAPI\Infrastructure\Decodable;
use MediaMath\TerminalOneAPI\Infrastructure\RecursiveFetchable;
use MediaMath\TerminalOneAPI\Infrastructure\Transportable;
use MediaMath\TerminalOneAPI\Infrastructure\ApiObject;

class RecursiveXMLResponseFetcher implements RecursiveFetchable
{

    private $decoder;

    public function __construct(Decodable $decoder)
    {
        $this->decoder = $decoder;
    }

    public function fetch(Transportable $transport, ApiObject $endpoint)
    {
        return $this->fetchRecursiveXML($transport, $endpoint->read(), $endpoint->options());
    }

    private function fetchRecursiveXML(Transportable $transport, $uri, $options, $num_fetched = 0)
    {
        $tmp = [];
        $response = $this->decoder->decode($transport->read($uri, $options));

        $attributes = (array)$response->entities->attributes();


        if (isset($response->entities) && isset($attributes['@attributes'])) {
            $total_results = $attributes['@attributes']['count'];

            $num_fetched += count($response->entities->entity);

            $options['page_offset'] = $num_fetched;


            foreach ($response->entities->entity AS $entity) {

                $attribs = (array)$entity->attributes();

                $tmp[] = json_decode(json_encode($attribs['@attributes']), true);
            }

            if (isset($options['fetch']) && $options['fetch'] == 'all') {

                if ($num_fetched < $total_results) {

                    $data = $this->fetchRecursiveXML($transport, $uri, $options, $num_fetched);

                    foreach ($data AS $value) {
                        $tmp[] = $value;
                    }

                    return $tmp;
                }

            }

        }

        return $tmp;

    }

}