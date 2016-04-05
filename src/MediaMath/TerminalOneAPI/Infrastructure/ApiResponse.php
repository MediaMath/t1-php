<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

/**
 * Class ApiResponse
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
class ApiResponse
{

    /**
     * @var
     */
    private $data;
    /**
     * @var ApiResponseMeta
     */
    private $meta;

    /**
     * ApiResponse constructor.
     * @param ApiResponseMeta $meta
     * @param $data
     */
    public function __construct(ApiResponseMeta $meta, $data)
    {
        $this->meta = $meta;
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function data()
    {
        return $this->data;
    }

    /**
     * @return ApiResponseMeta
     */
    public function meta()
    {
        return $this->meta;
    }

}