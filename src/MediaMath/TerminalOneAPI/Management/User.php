<?php


namespace Mediamath\TerminalOneAPI\Management;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;

class User extends ManagementApiObject implements Endpoint
{

    use NonDeletable;

    public function endpoint()
    {
        return 'users';
    }

}