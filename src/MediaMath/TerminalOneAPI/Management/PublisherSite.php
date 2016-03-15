<?php


namespace Mediamath\TerminalOneAPI\Management;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;
use Mediamath\TerminalOneAPI\Infrastructure\NonUpdateable;

class PublisherSite extends ManagementApiObject implements Endpoint
{

    use NonDeletable;
    use NonUpdateable;

    public function endpoint()
    {
        return 'publisher_sites';
    }

}