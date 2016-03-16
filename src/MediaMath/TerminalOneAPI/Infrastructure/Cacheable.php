<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

interface Cacheable
{
    public function store($key, $data);

    public function retrieve($key);
}