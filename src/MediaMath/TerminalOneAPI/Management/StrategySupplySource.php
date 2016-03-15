<?php

namespace Mediamath\TerminalOneAPI\Management;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;
use Mediamath\TerminalOneAPI\Infrastructure\NonReadable;
use Mediamath\TerminalOneAPI\Infrastructure\NonUpdateable;

class StrategySupplySource extends ManagementApiObject implements Endpoint
{

    use NonDeletable;
    use NonUpdateable;
    use NonReadable;

    public function endpoint()
    {
        return 'strategy_supply_sources';
    }

}