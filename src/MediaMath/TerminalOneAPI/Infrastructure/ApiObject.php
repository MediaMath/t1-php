<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

abstract class ApiObject
{

    abstract public function uri();

    public function __construct($options = [])
    {
        $this->options = $options;
    }

    public function options() {
        return $this->options;
    }

    public function create()
    {
        return $this->uri();
    }

    public function read()
    {

        $uri = $this->uri();

        if (array_key_exists('limit', $this->options)) {
            $uri .= '/limit/' . $this->options['limit'];
            unset($this->options['limit']);
        }

        if (array_key_exists('id', $this->options)) {
            $uri .= '/' . $this->options['id'];
            unset($this->options['id']);
        }

        return $uri;
    }

    public function update()
    {

        $uri = $this->uri();

        if (array_key_exists('id', $this->options)) {
            $uri .= '/' . $this->options['id'];
            unset($this->options['id']);
        }

        if (array_key_exists('related', $this->options)) {
            $uri .= '/' . $this->options['related'];
            unset($this->options['related']);
        }

        return $uri;
    }

}