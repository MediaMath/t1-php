<?php


namespace MediaMath\TerminalOneAPI\Management\Targeting;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

class StrategyDayPart extends ManagementApiObject implements Endpoint
{

    use NonUpdateable;

    public function endpoint()
    {
        return 'strategy_day_parts';
    }

    public function read()
    {

        $endpoint = 'strategies/' . $this->options['strategy_id'] . '/day_parts';

        unset($this->options['strategy_id']);

        $uri = str_replace($this->endpoint(), $endpoint, $this->uri());

        return $uri;

    }

    public function delete() {

        $uri = $this->uri() . '/' . $this->options['id'] . '/delete';

        return $uri;
    }

}