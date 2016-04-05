<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

/**
 * Class SiteListAssignment
 * @package MediaMath\TerminalOneAPI\Management
 */
class SiteListAssignment extends ManagementApiObject implements Endpoint
{
    use NonCreateable;
    use NonUpdateable;
    use NonDeletable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'site_lists/{{id}}/assignments';
    }

    /**
     * @return mixed
     */
    public function read()
    {

        $uri = str_replace('{{id}}', $this->options['id'], $this->uri());
        unset($this->options['id']);

        return $uri;

    }

}