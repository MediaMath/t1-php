<?php


namespace Mediamath\TerminalOneAPI\Management\Targeting;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;

class StrategyAudienceSegment extends ManagementApiObject implements Endpoint
{

    use NonDeletable;

    public function endpoint()
    {
        return 'strategies/{{strategy_id}}/audience_segments';
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