<?php


namespace MediaMath\TerminalOneAPI\Management\Targeting;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;

/**
 * Class StrategyAudienceSegment
 * @package MediaMath\TerminalOneAPI\Management\Targeting
 */
class StrategyAudienceSegment extends ManagementApiObject implements Endpoint
{

    use NonDeletable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'strategies/{{strategy_id}}/audience_segments';
    }

    /**
     * @return mixed
     */
    public function read()
    {
        $uri = str_replace('{{strategy_id}}', $this->options['id'], $this->uri());

        return $uri;

    }

    /**
     * @return mixed
     */
    public function create()
    {
        $uri = str_replace('{{strategy_id}}', $this->options['id'], $this->uri());

        return $uri;

    }

    /**
     * @return mixed
     */
    public function update()
    {
        $uri = str_replace('{{strategy_id}}', $this->options['id'], $this->uri());

        return $uri;

    }

}