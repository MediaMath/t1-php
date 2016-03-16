<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

class StrategyDomainRestriction extends ManagementApiObject implements Endpoint
{

    use NonUpdateable;
    use NonDeletable;

    public function endpoint()
    {
        return 'strategies/{{strategy_id}}/domain_restrictions';
    }

    public function create($data)
    {
        $uri = str_replace('{{strategy_id}}', $data['strategy_id'], $this->uri());
        unset($data['strategy_id']);

        return $this->apiClient()->create($uri, $data);
    }

    public function read($options = [])
    {

        $uri = str_replace($this->endpoint(), 'strategy_domain_restrictions', $this->uri());

        if (array_key_exists('limit', $options)) {
            $uri .= '/limit/' . $options['limit'];
            unset($options['limit']);
        }

        return $this->apiClient()->read($uri, $options);

    }

}