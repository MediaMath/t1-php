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

    public function read($options = [])
    {

        $uri = str_replace('{{campaign_id}}', $options['campaign_id'], $this->uri());
        unset($options['campaign_id']);

        if (array_key_exists('id', $options)) {
            $uri .= '/' . $options['id'];
            unset($options['id']);
        }

        if (array_key_exists('bulk', $options)) {
            $uri .= '/bulk';
            unset($options['id']);
        }

        return $this->apiClient()->read($uri, $options);

    }

    public function delete($options) {

        $uri = str_replace('{{campaign_id}}', $options['campaign_id'], $this->uri());

        $endpoint = $uri . '/' . $options['id'] . '/delete';

        return $this->apiClient()->update($endpoint, $options);
    }

}