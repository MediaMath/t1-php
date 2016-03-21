<?php

namespace MediaMath\TerminalOneAPI\Decoder;

use MediaMath\TerminalOneAPI\Infrastructure\DefaultDecodable;

class DefaultResponseDecoder implements DefaultDecodable
{

    public function decode($api_response)
    {
        return $api_response;
    }


}