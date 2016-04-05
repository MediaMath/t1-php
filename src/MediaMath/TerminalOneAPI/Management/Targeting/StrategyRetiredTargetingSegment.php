<?php


namespace MediaMath\TerminalOneAPI\Management\Targeting;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

/**
 * Class StrategyRetiredTargetingSegment
 * @package MediaMath\TerminalOneAPI\Management\Targeting
 */
class StrategyRetiredTargetingSegment extends ManagementApiObject implements Endpoint
{

    use NonDeletable;
    use NonCreateable;
    use NonUpdateable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'strategies/{{strategy_id}}/retired_targeting_segments';
    }

    /**
     * @return mixed
     */
    public function read()
    {
        $uri = str_replace('{{strategy_id}}', $this->options['id'], $this->uri());

        return $uri;

    }

}