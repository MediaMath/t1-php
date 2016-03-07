<?php

namespace Mediamath\TerminalOneAPI\Infrastructure;

interface Cacheable
{
    public function store($key, $data);

    public function retrieve($key);
}