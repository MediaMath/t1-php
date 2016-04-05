<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;

/**
 * Class StrategySiteList
 * @package MediaMath\TerminalOneAPI\Management
 */
class StrategySiteList extends ManagementApiObject implements Endpoint
{

    use NonDeletable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'strategies/{{strategy_id}}/site_lists';
    }

    /**
     * @return string
     */
    public function read()
    {

        $uri = str_replace('{{strategy_id}}', $this->options['strategy_id'], $this->uri());
        unset($this->options['strategy_id']);

        if (array_key_exists('id', $this->options)) {
            $uri .= '/' . $this->options['id'];
            unset($this->options['id']);
        }

        return $uri;

    }

}