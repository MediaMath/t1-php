<?php


namespace MediaMath\TerminalOneAPI\Video;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\VideoApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;

class Creative extends VideoApiObject implements Endpoint
{

    use NonDeletable;

    public function endpoint()
    {
        return 'creatives';
    }

}