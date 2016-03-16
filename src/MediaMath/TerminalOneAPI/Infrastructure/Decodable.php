<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

interface Decodable
{
    public function decode($api_response);

}