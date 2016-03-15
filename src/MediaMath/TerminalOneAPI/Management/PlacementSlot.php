<?php


namespace Mediamath\TerminalOneAPI\Management;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;
use Mediamath\TerminalOneAPI\Infrastructure\NonUpdateable;

class PlacementSlot extends ManagementApiObject implements Endpoint
{

    use NonDeletable;
    use NonUpdateable;

    public function endpoint()
    {
        return 'placement_slots';
    }

}