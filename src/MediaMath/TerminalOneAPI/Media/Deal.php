<?php


namespace MediaMath\TerminalOneAPI\Media;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\MediaApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;

/**
 * Class Deal
 * @package MediaMath\TerminalOneAPI\Media
 */
class Deal extends MediaApiObject implements Endpoint
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