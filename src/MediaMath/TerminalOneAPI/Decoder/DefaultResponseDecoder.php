<?php

namespace MediaMath\TerminalOneAPI\Decoder;

use MediaMath\TerminalOneAPI\Infrastructure\Decodable;

class DefaultResponseDecoder implements Decodable
{

    public function decode($api_response)
    {
        return $api_response;
    }


}