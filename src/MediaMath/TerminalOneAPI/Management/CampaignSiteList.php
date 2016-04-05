<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;

/**
 * Class CampaignSiteList
 * @package MediaMath\TerminalOneAPI\Management
 */
class CampaignSiteList extends ManagementApiObject implements Endpoint
{

    use NonDeletable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'campaigns/{{campaign_id}}/site_lists';
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

        return $uri;

    }

}