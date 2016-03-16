<?php


namespace MediaMath\TerminalOneAPI\Management\Targeting;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

class PixelBundle extends ManagementApiObject implements Endpoint
{

    use NonUpdateable;
    use NonDeletable;
    use NonCreateable;

    public function endpoint()
    {
        return 'pixel_bundles';
    }

}