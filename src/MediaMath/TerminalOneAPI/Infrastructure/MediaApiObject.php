<?php
/**
 * Created by PhpStorm.
 * User: mbucse
 * Date: 14/06/2017
 * Time: 16:27
 */

namespace MediaMath\TerminalOneAPI\Infrastructure;

/**
 * Class MediaApiObject
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
abstract class MediaApiObject extends ApiObject
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
        return ApiHost::getHost('T1_MEDIA', $this->api_subdomain, $this->api_version) . $this->endpoint();
    }

}