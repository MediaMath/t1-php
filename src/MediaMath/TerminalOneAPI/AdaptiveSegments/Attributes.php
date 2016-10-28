<?php


namespace MediaMath\TerminalOneAPI\AdaptiveSegments;

use MediaMath\TerminalOneAPI\Infrastructure\AdaptiveSegmentsApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;


/**
 * Class Advertiser
 * @package MediaMath\TerminalOneAPI\Management
 */
class Attributes extends AdaptiveSegmentsApiObject  implements Endpoint
{
    /**
     * @return string
     */
    public function endpoint()
    {
        return 'attributes';
    }

}