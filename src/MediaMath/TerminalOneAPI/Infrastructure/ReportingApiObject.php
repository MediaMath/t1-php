<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

abstract class ReportingApiObject extends ApiObject
{

    abstract protected function endpoint();

    public function uri()
    {
        return ApiHost::T1_REPORTING . $this->endpoint();
    }

}