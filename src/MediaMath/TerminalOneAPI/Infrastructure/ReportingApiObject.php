<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

/**
 * Class ReportingApiObject
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
abstract class ReportingApiObject extends ApiObject
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
        return ApiHost::getHost('T1_REPORTING', $this->api_subdomain, $this->api_version) . $this->endpoint();
    }

}