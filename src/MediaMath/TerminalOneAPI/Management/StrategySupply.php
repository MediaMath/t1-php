<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;

/**
 * Class StrategySupply
 * @package MediaMath\TerminalOneAPI\Management
 */
class StrategySupply extends ManagementApiObject implements Endpoint
{

    use NonDeletable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'strategies/{{strategy_id}}/supplies';
    }

    /**
     * @return mixed
     */
    public function read()
    {

        $uri = str_replace('{{strategy_id}}', $this->options['strategy_id'], $this->uri());
        unset($this->options['strategy_id']);

        return $uri;

    }

    /**
     * @return mixed
     */
    public function create()
    {

        $uri = str_replace('{{strategy_id}}', $this->options['strategy_id'], $this->uri());
        unset($this->options['strategy_id']);

        return $uri;

    }

    /**
     * @return mixed
     */
    public function update()
    {

        $uri = str_replace('{{strategy_id}}', $this->options['strategy_id'], $this->uri());
        unset($this->options['strategy_id']);

        return $uri;

    }

}