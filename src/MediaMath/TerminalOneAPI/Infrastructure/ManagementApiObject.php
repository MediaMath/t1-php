<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

/**
 * Class ManagementApiObject
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
abstract class ManagementApiObject extends ApiObject
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
        return ApiHost::T1_MANAGEMENT . $this->endpoint();
    }

}