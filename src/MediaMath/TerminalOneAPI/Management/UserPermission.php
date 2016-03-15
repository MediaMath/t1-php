<?php


namespace Mediamath\TerminalOneAPI\Management;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;

class UserPermission extends ManagementApiObject implements Endpoint
{

    use NonDeletable;

    public function endpoint()
    {
        return 'users/{{user_id}}/permissions';
    }

    public function read($options = [])
    {

        $uri = str_replace('{{user_id}}', $options['user_id'], $this->uri());
        unset($options['user_id']);

        return $this->apiClient()->read($uri, $options);

    }

    public function create($options = [])
    {

        $uri = str_replace('{{user_id}}', $options['user_id'], $this->uri());
        unset($options['user_id']);

        return $this->apiClient()->create($uri, $options);

    }

    public function update($options = [])
    {

        $uri = str_replace('{{user_id}}', $options['user_id'], $this->uri());
        unset($options['user_id']);

        return $this->apiClient()->update($uri, $options);

    }

}