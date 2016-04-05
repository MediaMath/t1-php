<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

/**
 * Class Deal
 * @package MediaMath\TerminalOneAPI\Management
 */
class Deal extends ManagementApiObject implements Endpoint
{

    use NonDeletable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'deals';
    }

}