<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;


/**
 * Class CampaignHistory
 * @package MediaMath\TerminalOneAPI\Management
 */
class CampaignHistory extends ManagementApiObject implements Endpoint
{

    use NonUpdateable;
    use NonCreateable;
    use NonDeletable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'campaigns/{{campaign_id}}/history';
    }

    /**
     * @return string
     */
    public function read()
    {

        $uri = str_replace('{{campaign_id}}', $this->options['campaign_id'], $this->uri());
        unset($this->options['campaign_id']);

        return $uri;

    }

}