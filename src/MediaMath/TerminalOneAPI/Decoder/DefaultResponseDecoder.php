<?php

namespace MediaMath\TerminalOneAPI\Decoder;

use MediaMath\TerminalOneAPI\Infrastructure\Decodable;
use MediaMath\TerminalOneAPI\Infrastructure\ApiResponse;
use MediaMath\TerminalOneAPI\Infrastructure\ApiResponseMeta;
use MediaMath\TerminalOneAPI\Infrastructure\HttpResponse;

class DefaultResponseDecoder implements Decodable
{

    public function decode(HttpResponse $api_response)
    {

        if ($api_response->headers()->contentType() == 'text/csv; charset=UTF-8') {
            return new ApiResponse(new ApiResponseMeta($this->mergeMetaInfo($api_response->httpCode())), $api_response->body());
        }

        if ($api_response->headers()->contentType() == 'application/vnd.mediamath.v1+json') {
            return $this->getMetaFromJSONResponse($api_response);
        }

        if ($api_response->headers()->contentType() == 'text/xml; charset=UTF-8') {
            return $this->getMetaFromXmlResponse($api_response);
        }

    }

    private function getMetaFromXmlResponse(HttpResponse $api_response)
    {

        preg_match('/called_on="[\d\-\ \:\.\+]+"/', $api_response->body(), $called_on);
        preg_match('/entities count="([\d]+)"/', $api_response->body(), $total_count);

        $meta = new ApiResponseMeta(
            $this->mergeMetaInfo($api_response->httpCode(), [
                'called_on' => (isset($called_on[0]) ?: null),
                'total_count' => (isset($total_count[1]) ?: null)
            ])
        );

        return new ApiResponse($meta, $api_response->body());

    }

    private function getMetaFromJSONResponse(HttpResponse $api_response)
    {

        preg_match('/("meta"\ ?\:\ ?)(\{(.)+?\})/s', $api_response->body(), $meta_info);

        $meta = (isset($meta_info[2]) ? json_decode($meta_info[2], true) : null);

        return new ApiResponse(new ApiResponseMeta($this->mergeMetaInfo($api_response->httpCode(), $meta)), $api_response->body());

    }

    private function mergeMetaInfo($http_code, $meta = [])
    {

        $tmp = [
            'http_code' => $http_code
        ];

        return array_merge($tmp, $meta);

    }


}