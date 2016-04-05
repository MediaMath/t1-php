<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

/**
 * Class SitePlacement
 * @package MediaMath\TerminalOneAPI\Management
 */
class SitePlacement extends ManagementApiObject implements Endpoint
{

    use NonDeletable;
    use NonUpdateable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'site_placements';
    }

}