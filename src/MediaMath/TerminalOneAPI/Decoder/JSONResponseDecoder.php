<?php

namespace MediaMath\TerminalOneAPI\Decoder;

use MediaMath\TerminalOneAPI\Infrastructure\ApiResponse;
use MediaMath\TerminalOneAPI\Infrastructure\ApiResponseMeta;
use MediaMath\TerminalOneAPI\Infrastructure\Decodable;
use MediaMath\TerminalOneAPI\Infrastructure\HttpResponse;

/**
 * Class JSONResponseDecoder
 * @package MediaMath\TerminalOneAPI\Decoder
 */
class JSONResponseDecoder implements Decodable
{

    /**
     * @param HttpResponse $api_response
     * @return ApiResponse
     */
    public function decode(HttpResponse $api_response)
    {
        $response = json_decode($api_response->body());

        $meta = new ApiResponseMeta((array) $response->meta);

        return new ApiResponse($meta, $response->data);
    }


}