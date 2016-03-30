<?php

namespace MediaMath\TerminalOneAPI\Decoder;

use MediaMath\TerminalOneAPI\Infrastructure\Decodable;
use MediaMath\TerminalOneAPI\Infrastructure\ApiResponse;
use MediaMath\TerminalOneAPI\Infrastructure\ApiResponseMeta;

class DefaultResponseDecoder implements Decodable
{

    public function decode($api_response)
    {

        $xml = strpos($api_response, '<?xml', 0);

        if ($xml !== false) {
            return $this->decodeXmlResponse($api_response);
        }

        return $this->decodeJsonResponse($api_response);

    }

    private function decodeXmlResponse($api_response)
    {

        preg_match('/called_on="[\d\-\ \:\.\+]+"/', $api_response, $called_on);
        preg_match('/entities count="([\d]+)"/', $api_response, $total_count);

        $meta = new ApiResponseMeta([
            'called_on' => $called_on[0],
            'total_count' => $total_count[1]
        ]);

        return new ApiResponse($meta, $api_response);

    }

    private function decodeJsonResponse($api_response)
    {

        preg_match('/("meta"\ ?\:\ ?)(\{(.)+?\})/s', $api_response, $meta);

        $meta = new ApiResponseMeta(json_decode($meta[2], true));

        return new ApiResponse($meta, $api_response);

    }


}