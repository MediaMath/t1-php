<?php

namespace Mediamath\TerminalOneAPI\Infrastructure;

abstract class VideoApiObject extends ApiObject
{

    abstract protected function endpoint();

    public function uri()
    {
        return 'https://api.mediamath.com/video/v1/' . $this->endpoint();
    }

}