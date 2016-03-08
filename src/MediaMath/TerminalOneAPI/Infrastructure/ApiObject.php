<?php

namespace Mediamath\TerminalOneAPI\Infrastructure;

abstract class ApiObject
{

    private $apiClient;

    abstract public function uri();

    public function __construct(Clientable $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function create($data)
    {
        $this->apiClient->create($this->uri(), $data);
    }

    public function read($options = [])
    {

        $uri = $this->uri();

        if (array_key_exists('limit', $options)) {
            $uri .= '/limit/' . $options['limit'];
            unset($options['limit']);
        }

        return $this->apiClient->read($uri, $options);
    }

    public function update($data)
    {
        $this->apiClient->update($this->uri(), $data);
    }

}