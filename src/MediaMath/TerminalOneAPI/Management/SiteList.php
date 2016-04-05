<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;

/**
 * Class SiteList
 * @package MediaMath\TerminalOneAPI\Management
 */
class SiteList extends ManagementApiObject implements Endpoint
{

    use NonDeletable;
    use NonCreateable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'site_lists';
    }

    /**
     * @return string
     */
    public function download()
    {

        $uri = $this->uri();

        $uri .= '/' . $this->options['id'] . '/download.csv';
        unset($this->options['id']);

        return $uri;

    }

    /**
     * @return string
     */
    public function upload()
    {
        return $this->uri() . '/upload';

    }

    /**
     * @return string
     */
    public function update()
    {

        $uri = $this->uri();

        $uri .= '/' . $this->options['id'] . '/domains';
        unset($this->options['id']);

        return $uri;

    }

}