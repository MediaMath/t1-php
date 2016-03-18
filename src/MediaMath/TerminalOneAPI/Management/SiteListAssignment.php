<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

class SiteListAssignment extends ManagementApiObject implements Endpoint
{
    use NonCreateable;
    use NonUpdateable;
    use NonDeletable;

    public function endpoint()
    {
        return 'site_lists/{{id}}/assignments';
    }

    public function read()
    {

        $uri = str_replace('{{id}}', $this->options['id'], $this->uri());
        unset($this->options['id']);

        return $uri;

    }

}