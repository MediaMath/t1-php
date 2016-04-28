<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;


/**
 * Class StrategyHistory
 * @package MediaMath\TerminalOneAPI\Management
 */
class StrategyHistory extends ManagementApiObject implements Endpoint
{

    use NonUpdateable;
    use NonCreateable;
    use NonDeletable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'strategies/{{strategy_id}}/history';
    }

    /**
     * @return string
     */
    public function read()
    {

        $uri = str_replace('{{strategy_id}}', $this->options['strategy_id'], $this->uri());
        unset($this->options['strategy_id']);

        return $uri;

    }

}