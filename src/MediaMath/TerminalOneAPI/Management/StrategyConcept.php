<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

/**
 * Class StrategyConcept
 * @package MediaMath\TerminalOneAPI\Management
 */
class StrategyConcept extends ManagementApiObject implements Endpoint
{

    use NonUpdateable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'strategies/{{strategy_id}}/strategy_concepts';
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return str_replace($this->endpoint(), 'strategy_concepts', $this->uri());

    }

    /**
     * @return mixed
     */
    public function read()
    {
        $uri = str_replace('{{strategy_id}}', $this->options['strategy_id'], $this->uri());
        unset($this->options['strategy_id']);

        return str_replace('strategy_', '', $uri);

    }

    /**
     * @return string
     */
    public function delete()
    {

        $uri = str_replace('{{strategy_id}}', $this->options['strategy_id'], $this->uri());
        unset($this->options['strategy_id']);

        $uri .= '/delete';

        return $uri;
    }

}