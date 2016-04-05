<?php


namespace MediaMath\TerminalOneAPI\Management\Targeting;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

/**
 * Class PixelBundle
 * @package MediaMath\TerminalOneAPI\Management\Targeting
 */
class PixelBundle extends ManagementApiObject implements Endpoint
{

    use NonUpdateable;
    use NonDeletable;
    use NonCreateable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'pixel_bundles';
    }

}