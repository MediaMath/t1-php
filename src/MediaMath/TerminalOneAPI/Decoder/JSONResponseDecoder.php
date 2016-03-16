<?php

namespace MediaMath\TerminalOneAPI\Decoder;

use MediaMath\TerminalOneAPI\Infrastructure\Decodable;

class JSONResponseDecoder implements Decodable
{

    public function decode($api_response)
    {
        return json_decode($api_response);
    }


}