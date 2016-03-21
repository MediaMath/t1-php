<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

interface RecursiveFetchable
{

    public function __construct(Decodable $decoder);

    public function fetch(Transportable $transport, ApiObject $endpoint);

}