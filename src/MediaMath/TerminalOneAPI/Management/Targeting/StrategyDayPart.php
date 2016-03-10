<?php


namespace Mediamath\TerminalOneAPI\Management\Targeting;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonUpdateable;

class StrategyDayPart extends ManagementApiObject implements Endpoint
{

    use NonUpdateable;

    public function endpoint()
    {
        return 'strategy_day_parts';
    }

    public function read($options = [])
    {

        $endpoint = 'strategies/' . $options['strategy_id'] . '/day_parts';

        unset($options['strategy_id']);

        $uri = str_replace($this->endpoint(), $endpoint, $this->uri());

        return $this->apiClient()->read($uri, $options);

    }

    public function delete($options) {

        $endpoint = $this->uri() . '/' . $options['id'] . '/delete';

        return $this->apiClient()->update($endpoint, $options);
    }

}