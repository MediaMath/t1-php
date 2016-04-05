<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

/**
 * Class AdServer
 * @package MediaMath\TerminalOneAPI\Management
 */
class AdServer extends ManagementApiObject implements Endpoint
{

    use NonDeletable;
    use NonUpdateable;
    use NonCreateable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'ad_servers';
    }

}