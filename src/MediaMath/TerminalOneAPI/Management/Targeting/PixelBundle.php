<?php


namespace Mediamath\TerminalOneAPI\Management\Targeting;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonCreateable;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;
use Mediamath\TerminalOneAPI\Infrastructure\NonUpdateable;

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