<?php


namespace MediaMath\TerminalOneAPI\Management\Targeting;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

/**
 * Class TargetValue
 * @package MediaMath\TerminalOneAPI\Management\Targeting
 */
class TargetValue extends ManagementApiObject implements Endpoint
{

    use NonUpdateable;
    use NonCreateable;
    use NonDeletable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'target_values';
    }

}