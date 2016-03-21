<?php

namespace MediaMath\TerminalOneAPI\Decoder;

use MediaMath\TerminalOneAPI\Infrastructure\JSONDecodable;

class JSONResponseDecoder implements JSONDecodable
{

    public function decode($api_response)
    {
        return json_decode($api_response);
    }


}