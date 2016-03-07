<?php

namespace Mediamath\TerminalOneAPI;

use Mediamath\TerminalOneAPI\Decoder\DefaultResponseDecoder;
use Mediamath\TerminalOneAPI\Infrastructure\Decodable;
use Mediamath\TerminalOneAPI\Infrastructure\Transportable;
use Mediamath\TerminalOneAPI\Infrastructure\Clientable;
use Mediamath\TerminalOneAPI\Infrastructure\Cacheable;

class CachingApiClient implements Clientable
{

    private $transport, $cache, $formatter;

    public function __construct(Transportable $transport, Cacheable $cache, Decodable $formatter = null)
    {

        $this->transport = $transport;
        $this->formatter = $formatter;
        $this->cache = $cache;

        if (is_null($formatter)) {
            $this->formatter = new DefaultResponseDecoder();
        }

    }

    public function read($endpoint, $options)
    {
        $key = MD5($endpoint . json_encode($options));

        if ($this->cache->retrieve($key)) {
            return $this->formatter->decode($this->cache->retrieve($key));
        }

        $data = $this->transport->read($endpoint, $options);

        $this->cache->store($key, $data);

        return $this->formatter->decode($data);

    }

    public function create($endpoint, $data)
    {
        return $this->formatter->decode($this->transport->create($endpoint, $data));
    }

    public function update($endpoint, $data)
    {
        return $this->formatter->decode($this->transport->update($endpoint, $data));
    }

}