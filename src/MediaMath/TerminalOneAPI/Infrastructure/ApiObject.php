<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

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
        return $this->apiClient->create($this->uri(), $data);
    }

    public function read($options = [])
    {

        $uri = $this->uri();

        if (array_key_exists('limit', $options)) {
            $uri .= '/limit/' . $options['limit'];
            unset($options['limit']);
        }

        if (array_key_exists('id', $options)) {
            $uri .= '/' . $options['id'];
            unset($options['id']);
        }

        return $this->apiClient->read($uri, $options);
    }

    public function update($data)
    {

        $uri = $this->uri();

        if (array_key_exists('id', $data)) {
            $uri .= '/' . $data['id'];
            unset($data['id']);
        }

        if (array_key_exists('related', $data)) {
            $uri .= '/' . $data['related'];
            unset($data['related']);
        }

        $this->apiClient->update($uri, $data);
    }

    protected function apiClient() {
        return $this->apiClient;
    }

}