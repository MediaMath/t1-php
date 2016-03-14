<?php

namespace Mediamath\TerminalOneAPI\Infrastructure;

interface Transportable
{

    public function __construct(Authenticable $authenticator);

    public function create($uri, $data);

    public function read($uri, $options);

    public function update($uri, $data);

    public function authHash();

}