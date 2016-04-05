<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;

/**
 * Class Advertiser
 * @package MediaMath\TerminalOneAPI\Management
 */
class Advertiser extends ManagementApiObject implements Endpoint
{
    use NonDeletable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'advertisers';
    }

}