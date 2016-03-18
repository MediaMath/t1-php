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

    public function create()
    {
        $uri = str_replace('{{strategy_id}}', $this->options['strategy_id'], $this->uri());
        unset($this->options['strategy_id']);

        return $uri;
    }

    public function read()
    {

        $uri = str_replace($this->endpoint(), 'strategy_domain_restrictions', $this->uri());

        if (array_key_exists('limit', $this->options)) {
            $uri .= '/limit/' . $this->options['limit'];
            unset($this->options['limit']);
        }

        return $uri;

    }

}