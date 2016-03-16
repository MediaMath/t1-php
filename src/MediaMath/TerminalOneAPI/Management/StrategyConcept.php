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

    public function create($data)
    {
        $uri = str_replace($this->endpoint(), 'strategy_concepts', $this->uri());

        return $this->apiClient()->create($uri, $data);
    }

    public function read($options = [])
    {

        $uri = str_replace('{{strategy_id}}', $options['strategy_id'], $this->uri());
        unset($options['strategy_id']);

        return $this->apiClient()->read($uri, $options);

    }

    public function delete($options)
    {

        $uri = str_replace('{{strategy_id}}', $options['strategy_id'], $this->uri());
        unset($options['strategy_id']);

        $uri .= '/delete';

        return $this->apiClient()->update($uri, $options);
    }

}