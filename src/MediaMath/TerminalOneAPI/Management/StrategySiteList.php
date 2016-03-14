<?php


namespace Mediamath\TerminalOneAPI\Management;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;

class StrategySiteList extends ManagementApiObject implements Endpoint
{

    use NonDeletable;

    public function endpoint()
    {
        return 'strategies/{{strategy_id}}/site_lists';
    }

    public function read($options = [])
    {

        $uri = str_replace('{{strategy_id}}', $options['strategy_id'], $this->uri());
        unset($options['strategy_id']);

        if (array_key_exists('id', $options)) {
            $uri .= '/' . $options['id'];
            unset($options['id']);
        }

        return $this->apiClient()->read($uri, $options);

    }

}