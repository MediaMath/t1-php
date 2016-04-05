<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;

/**
 * Class UserPermission
 * @package MediaMath\TerminalOneAPI\Management
 */
class UserPermission extends ManagementApiObject implements Endpoint
{

    use NonDeletable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'users/{{user_id}}/permissions';
    }

    /**
     * @return string
     */
    public function read()
    {

        $uri = str_replace('{{user_id}}', $this->options['user_id'], $this->uri());
        unset($this->options['user_id']);

        return $uri;

    }

    /**
     * @return string
     */
    public function create()
    {

        $uri = str_replace('{{user_id}}', $this->options['user_id'], $this->uri());
        unset($this->options['user_id']);

        return $uri;

    }

    /**
     * @return string
     */
    public function update()
    {

        $uri = str_replace('{{user_id}}', $this->options['user_id'], $this->uri());
        unset($this->options['user_id']);

        return $uri;

    }

}