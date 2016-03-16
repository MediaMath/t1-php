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

    public function read($options = [])
    {
        $uri = str_replace('{{strategy_id}}', $options['id'], $this->uri());

        return $this->apiClient()->read($uri, $options);

    }

    public function create($data)
    {
        $uri = str_replace('{{strategy_id}}', $data['id'], $this->uri());

        return $this->apiClient()->create($uri, $data);

    }

    public function update($data)
    {

        $uri = str_replace('{{strategy_id}}', $data['id'], $this->uri());

        return $this->apiClient()->create($uri, $data);

    }

}