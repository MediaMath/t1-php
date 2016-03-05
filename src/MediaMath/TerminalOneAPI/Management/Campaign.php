<?php


namespace Mediamath\TerminalOneAPI\Management;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;

class Campaign extends ManagementApiObject implements Endpoint
{
    public function endpoint()
    {
        return 'campaigns';
    }

}