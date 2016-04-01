<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

interface Decodable
{
    public function decode(HttpResponse $api_response);

}