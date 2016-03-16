<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

interface Clientable
{

    public function create($endpoint, $data);

    public function read($endpoint, $options);

    public function update($endpoint, $data);

}