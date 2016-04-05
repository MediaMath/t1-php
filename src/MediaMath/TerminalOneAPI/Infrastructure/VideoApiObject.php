<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

/**
 * Class VideoApiObject
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
abstract class VideoApiObject extends ApiObject
{

    /**
     * @return mixed
     */
    abstract protected function endpoint();

    /**
     * @return string
     */
    public function uri()
    {
        return ApiHost::T1_VIDEO . $this->endpoint();
    }

}