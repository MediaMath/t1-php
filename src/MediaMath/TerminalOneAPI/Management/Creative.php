<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;

class Creative extends ManagementApiObject implements Endpoint
{

    use NonDeletable;
    use NonCreateable;

    public function endpoint()
    {
        return 'creatives';
    }

    public function upload()
    {
        $uri = $this->uri() . '/upload';

        if (isset($this->options['batch_id'])) {
            $uri .= '/' . $this->options['batch_id'];
            unset($this->options['batch_id']);
        }

        return $uri;

    }

}