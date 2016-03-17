<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

abstract class VideoApiObject extends ApiObject
{

    abstract protected function endpoint();

    public function uri()
    {
        return ApiHost::T1_VIDEO . $this->endpoint();
    }

}