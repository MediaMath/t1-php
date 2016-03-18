<?php

namespace MediaMath\TerminalOneAPI;

use MediaMath\TerminalOneAPI\Decoder\DefaultResponseDecoder;
use MediaMath\TerminalOneAPI\Decoder\JSONResponseDecoder;
use MediaMath\TerminalOneAPI\Decoder\XMLResponseDecoder;
use MediaMath\TerminalOneAPI\Infrastructure\ApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\Decodable;
use MediaMath\TerminalOneAPI\Infrastructure\Transportable;
use MediaMath\TerminalOneAPI\Infrastructure\Clientable;

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

        if ($decoder instanceof XMLResponseDecoder) {
            return $this->fetchRecursiveXML($endpoint->read(), $endpoint->options(), $decoder);
        }

        if ($decoder instanceof JSONResponseDecoder) {
            return $this->fetchRecursiveJSON($endpoint->read(), $endpoint->options(), $decoder);
        }

        return $decoder->decode($this->transport->read($endpoint->read(), $endpoint->options()));

    }

    public function update(ApiObject $endpoint, Decodable $decoder = null)
    {
        $decoder = $decoder ?: $this->decoder;

        return $decoder->decode($this->transport->update($endpoint->update(), $endpoint->options()));
    }

    private function fetchRecursiveXML($endpoint, $options, Decodable $decoder, $num_fetched = 0)
    {
        $tmp = [];
        $response = $decoder->decode($this->transport->read($endpoint, $options));

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

                    $data = $this->fetchRecursiveXML($endpoint, $options, $decoder, $num_fetched);

                    foreach ($data AS $value) {
                        $tmp[] = $value;
                    }

                    return $tmp;
                }

            }

        }

        return $tmp;

    }

    private function fetchRecursiveJSON($endpoint, $options, $decoder)
    {

        $response = $decoder->decode($this->transport->read($endpoint, $options));

        if (isset($options['fetch']) && $options['fetch'] == 'all') {

            if (isset($response->meta) && isset($response->meta->next_page)) {

                $data = $this->fetchRecursiveJSON($response->meta->next_page, $options, $decoder);

                foreach ($data AS $value) {
                    $response->data[] = $value;
                }

                return $response->data;
            }

            if (isset($response->data)) {
                return $response->data;
            }
        }


        return $response;
    }

}