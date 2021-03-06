<?php

namespace MediaMath\TerminalOneAPI\Decoder;

use MediaMath\TerminalOneAPI\Exception\UnknownContentTypeException;
use MediaMath\TerminalOneAPI\Infrastructure\Decodable;
use MediaMath\TerminalOneAPI\Infrastructure\ApiResponse;
use MediaMath\TerminalOneAPI\Infrastructure\ApiResponseMeta;
use MediaMath\TerminalOneAPI\Infrastructure\HttpResponse;

/**
 * Class DefaultResponseDecoder
 * @package MediaMath\TerminalOneAPI\Decoder
 */
class DefaultResponseDecoder implements Decodable
{

    /**
     * @param HttpResponse $api_response
     * @return ApiResponse
     * @throws UnknownContentTypeException
     */
    public function decode(HttpResponse $api_response)
    {

        if ($api_response->headers()->contentType() == 'text/csv; charset=UTF-8') {
            return new ApiResponse(new ApiResponseMeta($this->mergeMetaInfo($api_response->httpCode())), $api_response->body());
        }

        if (preg_match('/^application\/.*json/i', $api_response->headers()->contentType())) {
            return $this->getMetaFromJSONResponse($api_response);
        }

        if ($api_response->headers()->contentType() == 'text/xml; charset=UTF-8') {
            return $this->getMetaFromXmlResponse($api_response);
        }
        throw new UnknownContentTypeException('Unknown content-type received: ' . $api_response->headers()->contentType(), 400);
    }

    /**
     * @param HttpResponse $api_response
     * @return ApiResponse
     */
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

    /**
     * @param HttpResponse $api_response
     * @return ApiResponse
     */
    private function getMetaFromJSONResponse(HttpResponse $api_response)
    {

        preg_match('/("meta"\ ?\:\ ?)(\{(.)+?\})/s', $api_response->body(), $meta_info);

        $meta = (isset($meta_info[2]) ? json_decode($meta_info[2], true) : null);

        return new ApiResponse(new ApiResponseMeta($this->mergeMetaInfo($api_response->httpCode(), $meta)), $api_response->body());

    }

    /**
     * @param $http_code
     * @param array $meta
     * @return mixed
     */
    private function mergeMetaInfo($http_code, $meta = [])
    {

        $tmp = [
            'http_code' => $http_code
        ];

        return array_merge($tmp, $meta);

    }


}
