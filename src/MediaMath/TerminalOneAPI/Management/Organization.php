<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

/**
 * Class Organization
 * @package MediaMath\TerminalOneAPI\Management
 */
class Organization extends ManagementApiObject implements Endpoint
{

    use NonDeletable;
    use NonCreateable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'organizations';
    }

}