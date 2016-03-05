<?php

namespace Mediamath\TerminalOneAPI\Decoder;

use Mediamath\TerminalOneAPI\Infrastructure\Decodable;

class JSONResponseDecoder implements Decodable
{

    public function decode($api_response)
    {
        return json_decode($api_response);
    }


}