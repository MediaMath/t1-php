<?php

namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonReadable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

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