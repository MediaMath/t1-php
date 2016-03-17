<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

abstract class ManagementApiObject extends ApiObject
{

    abstract protected function endpoint();

    public function uri()
    {
        return ApiHost::T1_MANAGEMENT . $this->endpoint();
    }

}