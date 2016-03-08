<?php


namespace Mediamath\TerminalOneAPI\Management;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;

class Advertiser extends ManagementApiObject implements Endpoint
{
    public function endpoint()
    {
        return 'advertisers';
    }

}