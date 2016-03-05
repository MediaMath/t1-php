<?php

namespace Mediamath\TerminalOneAPI\Decoder;

use Mediamath\TerminalOneAPI\Infrastructure\Decodable;

class DefaultResponseDecoder implements Decodable
{

    public function decode($api_response)
    {
        return $api_response;
    }


}