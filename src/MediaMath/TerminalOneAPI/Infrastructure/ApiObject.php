<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

/**
 * Class ApiObject
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
abstract class ApiObject
{

    /**
     * @return mixed
     */
    abstract public function uri();

    /**
     * ApiObject constructor.
     * @param array $options
     */
    public function __construct($options = [])
    {
        $this->options = $options;
    }

    /**
     * @return array
     */
    public function options() {
        return $this->options;
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return $this->uri();
    }

    /**
     * @return string
     */
    public function read()
    {

        $uri = $this->uri();

        $options = array_filter($this->options());

        if (array_key_exists('limit', $options)) {
            $uri .= '/limit/' . $options['limit'];
            unset($this->options['limit']);
        }

        if (array_key_exists('id', $options)) {
            $uri .= '/' . $options['id'];
            unset($this->options['id']);
        }

        return $uri;
    }

    /**
     * @return string
     */
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