<?php

namespace Mediamath\TerminalOneAPI;

use Mediamath\TerminalOneAPI\Decoder\DefaultResponseDecoder;
use Mediamath\TerminalOneAPI\Infrastructure\Decodable;
use Mediamath\TerminalOneAPI\Infrastructure\Transportable;
use Mediamath\TerminalOneAPI\Infrastructure\Clientable;

class ApiClient implements Clientable
{

    private $transport, $formatter;

    public function __construct(Transportable $transport, Decodable $formatter = null)
    {

        $this->transport = $transport;
        $this->formatter = $formatter;

        if (is_null($formatter)) {
            $this->formatter = new DefaultResponseDecoder();
        }

    }

    public function create($endpoint, $data)
    {
        return $this->formatter->decode($this->transport->create($endpoint, $data));
    }

    public function read($endpoint, $options)
    {
        return $this->formatter->decode($this->transport->read($endpoint, $options));
    }

    public function update($endpoint, $data)
    {
        return $this->formatter->decode($this->transport->update($endpoint, $data));
    }

}