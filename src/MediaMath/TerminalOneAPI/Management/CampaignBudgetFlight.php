<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

/**
 * Class CampaignBudgetFlight
 * @package MediaMath\TerminalOneAPI\Management
 */
class CampaignBudgetFlight extends ManagementApiObject implements Endpoint
{

    use NonUpdateable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'campaigns/{{campaign_id}}/budget_flights';
    }

    /**
     * @return string
     */
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

    /**
     * @return string
     */
    public function delete()
    {
        $uri = str_replace('{{campaign_id}}', $this->options['campaign_id'], $this->uri());

        return $uri . '/' . $this->options['id'] . '/delete';

    }

}