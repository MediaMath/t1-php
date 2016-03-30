<?php

namespace MediaMath\TerminalOneAPI\Decoder;

use MediaMath\TerminalOneAPI\Infrastructure\ApiResponse;
use MediaMath\TerminalOneAPI\Infrastructure\ApiResponseMeta;
use MediaMath\TerminalOneAPI\Infrastructure\Decodable;

class JSONResponseDecoder implements Decodable
{

    public function decode($api_response)
    {
        $response = json_decode($api_response);

        $meta = new ApiResponseMeta((array) $response->meta);

        return new ApiResponse($meta, $response->data);
    }


}