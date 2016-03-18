<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

interface Clientable
{

    public function create(ApiObject $endpoint, Decodable $decoder);

    public function read(ApiObject $endpoint, Decodable $decoder);

    public function update(ApiObject $endpoint, Decodable $decoder);

}