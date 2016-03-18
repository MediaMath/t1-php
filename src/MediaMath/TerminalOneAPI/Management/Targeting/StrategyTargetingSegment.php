<?php


namespace MediaMath\TerminalOneAPI\Management\Targeting;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;

class StrategyTargetingSegment extends ManagementApiObject implements Endpoint
{

    use NonDeletable;

    public function endpoint()
    {
        return 'strategies/{{strategy_id}}/targeting_segments';
    }

    public function read()
    {
        $uri = str_replace('{{strategy_id}}', $this->options['id'], $this->uri());

        return $uri;

    }

    public function create()
    {
        $uri = str_replace('{{strategy_id}}', $this->options['id'], $this->uri());

        return $uri;

    }

    public function update()
    {

        $uri = str_replace('{{strategy_id}}', $this->options['id'], $this->uri());

        return $uri;

    }

}