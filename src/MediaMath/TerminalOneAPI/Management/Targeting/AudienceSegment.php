<?php


namespace MediaMath\TerminalOneAPI\Management\Targeting;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

/**
 * Class AudienceSegment
 * @package MediaMath\TerminalOneAPI\Management\Targeting
 */
class AudienceSegment extends ManagementApiObject implements Endpoint
{

    use NonDeletable;
    use NonCreateable;
    use NonUpdateable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'audience_segments';
    }

}