<?php


namespace MediaMath\TerminalOneAPI\Management\Targeting;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

/**
 * Class StrategyTargetDimension
 * @package MediaMath\TerminalOneAPI\Management\Targeting
 */
class StrategyTargetDimension extends ManagementApiObject implements Endpoint
{

    use NonUpdateable;
    use NonDeletable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'strategies/{{strategy_id}}/target_dimensions';
    }

    /**
     * @return mixed
     */
    public function create()
    {

        $endpoint = 'strategies/' . $this->options['strategy_id'] . '/target_dimensions/' . $this->options['target_dimension_id'];

        unset($this->options['target_dimension_id']);
        unset($this->options['strategy_id']);

        $uri = str_replace($this->endpoint(), $endpoint, $this->uri());

        return $uri;

    }

    /**
     * @return string
     */
    public function read() {

        $uri = str_replace('{{strategy_id}}', $this->options['strategy_id'], $this->uri()) . '/' . $this->options['target_dimension_id'];

        unset($this->options['strategy_id']);

        return $uri;

    }

}