<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;

class UserPermission extends ManagementApiObject implements Endpoint
{

    use NonDeletable;

    public function endpoint()
    {
        return 'users/{{user_id}}/permissions';
    }

    public function read()
    {

        $uri = str_replace('{{user_id}}', $this->options['user_id'], $this->uri());
        unset($this->options['user_id']);

        return $uri;

    }

    public function create()
    {

        $uri = str_replace('{{user_id}}', $this->options['user_id'], $this->uri());
        unset($this->options['user_id']);

        return $uri;

    }

    public function update()
    {

        $uri = str_replace('{{user_id}}', $this->options['user_id'], $this->uri());
        unset($this->options['user_id']);

        return $uri;

    }

}