<?php

namespace Mediamath\TerminalOneAPI;

use Mediamath\TerminalOneAPI\Decoder\DefaultResponseDecoder;
use Mediamath\TerminalOneAPI\Decoder\JSONResponseDecoder;
use Mediamath\TerminalOneAPI\Decoder\XMLResponseDecoder;
use Mediamath\TerminalOneAPI\Infrastructure\Decodable;
use Mediamath\TerminalOneAPI\Infrastructure\Transportable;
use Mediamath\TerminalOneAPI\Infrastructure\Clientable;

class ApiClient implements Clientable
{

    private $transport, $decoder;

    private $num = 0;

    public function __construct(Transportable $transport, Decodable $decoder = null)
    {

        $this->transport = $transport;
        $this->decoder = $decoder ?: new DefaultResponseDecoder();

    }

    public function create($endpoint, $data)
    {
        return $this->decoder->decode($this->transport->create($endpoint, $data));
    }

    public function read($endpoint, $options)
    {

        if ($this->decoder instanceof XMLResponseDecoder) {
            return $this->fetchRecursiveXML($endpoint, $options);
        }

        if ($this->decoder instanceof JSONResponseDecoder) {
            return $this->fetchRecursiveJSON($endpoint, $options);

        }

        return $this->decoder->decode($this->transport->read($endpoint, $options));

    }

    public function update($endpoint, $data)
    {
        return $this->decoder->decode($this->transport->update($endpoint, $data));
    }

    private function fetchRecursiveXML($endpoint, $options, $num_fetched = 0)
    {
        $tmp = [];
        $response = $this->decoder->decode($this->transport->read($endpoint, $options));

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

                    $data = $this->fetchRecursiveXML($endpoint, $options, $num_fetched);

                    foreach ($data AS $value) {
                        $tmp[] = $value;
                    }

                    return $tmp;
                }

            }

        }

        return $tmp;

    }

    private function fetchRecursiveJSON($endpoint, $options)
    {

        $response = $this->decoder->decode($this->transport->read($endpoint, $options));

        if (isset($options['fetch']) && $options['fetch'] == 'all') {

            if (isset($response->meta) && isset($response->meta->next_page)) {

                $data = $this->fetchRecursiveJSON($response->meta->next_page, $options);

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