<?php


namespace Mediamath\TerminalOneAPI\Management;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;
use Mediamath\TerminalOneAPI\Infrastructure\NonUpdateable;

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