<?php


namespace Mediamath\TerminalOneAPI\Video;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\VideoApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonCreateable;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;

class Creative extends VideoApiObject implements Endpoint
{

    use NonDeletable;
    use NonCreateable;

    public function endpoint()
    {
        return 'creatives';
    }

}