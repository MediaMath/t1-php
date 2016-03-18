<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

class StrategyConcept extends ManagementApiObject implements Endpoint
{

    use NonUpdateable;

    public function endpoint()
    {
        return 'strategies/{{strategy_id}}/strategy_concepts';
    }

    public function create()
    {
        return str_replace($this->endpoint(), 'strategy_concepts', $this->uri());

    }

    public function read()
    {
        $uri = str_replace('{{strategy_id}}', $this->options['strategy_id'], $this->uri());
        unset($this->options['strategy_id']);

        return str_replace('strategy_', '', $uri);

    }

    public function delete()
    {

        $uri = str_replace('{{strategy_id}}', $this->options['strategy_id'], $this->uri());
        unset($this->options['strategy_id']);

        $uri .= '/delete';

        return $uri;
    }

}