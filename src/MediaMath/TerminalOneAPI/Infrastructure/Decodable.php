<?php

namespace Mediamath\TerminalOneAPI\Infrastructure;

interface Decodable
{
    public function decode($api_response);

}