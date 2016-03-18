<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

class CampaignBudgetFlight extends ManagementApiObject implements Endpoint
{

    use NonUpdateable;

    public function endpoint()
    {
        return 'campaigns/{{campaign_id}}/budget_flights';
    }

    public function read()
    {

        $uri = str_replace('{{campaign_id}}', $this->options['campaign_id'], $this->uri());
        unset($this->options['campaign_id']);

        if (array_key_exists('id', $this->options)) {
            $uri .= '/' . $this->options['id'];
            unset($this->options['id']);
        }

        if (array_key_exists('bulk', $this->options)) {
            $uri .= '/bulk';
            unset($this->options['id']);
        }

        return $uri;

    }

    public function delete()
    {
        $uri = str_replace('{{campaign_id}}', $this->options['campaign_id'], $this->uri());

        return $uri . '/' . $this->options['id'] . '/delete';

    }

}