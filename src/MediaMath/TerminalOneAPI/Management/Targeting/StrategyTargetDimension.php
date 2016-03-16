<?php


namespace MediaMath\TerminalOneAPI\Management\Targeting;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

class StrategyTargetDimension extends ManagementApiObject implements Endpoint
{

    use NonUpdateable;
    use NonDeletable;

    public function endpoint()
    {
        return 'strategies/{{strategy_id}}/target_dimensions';
    }

    public function create($options = [])
    {

        $endpoint = 'strategies/' . $options['strategy_id'] . '/target_dimensions/' . $options['target_dimension_id'];

        unset($options['target_dimension_id']);
        unset($options['strategy_id']);

        $uri = str_replace($this->endpoint(), $endpoint, $this->uri());

        return $this->apiClient()->create($uri, $options);

    }

    public function read($options = []) {

        $uri = str_replace('{{strategy_id}}', $options['strategy_id'], $this->uri()) . '/' . $options['target_dimension_id'];

        unset($options['strategy_id']);

        return $this->apiClient()->read($uri, $options);

    }

}