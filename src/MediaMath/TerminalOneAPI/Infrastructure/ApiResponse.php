<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

class ApiResponse
{

    private $data;
    private $meta;

    public function __construct(ApiResponseMeta $meta, $data)
    {
        $this->meta = $meta;
        $this->data = $data;
    }

    public function data()
    {
        return $this->data;
    }

    public function meta()
    {
        return $this->meta;
    }

}