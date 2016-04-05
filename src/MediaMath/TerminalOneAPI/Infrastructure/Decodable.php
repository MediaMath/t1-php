<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

/**
 * Interface Decodable
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
interface Decodable
{
    /**
     * @param HttpResponse $api_response
     * @return mixed
     */
    public function decode(HttpResponse $api_response);

}