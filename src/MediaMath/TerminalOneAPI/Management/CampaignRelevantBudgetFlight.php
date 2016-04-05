<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

/**
 * Class CampaignRelevantBudgetFlight
 * @package MediaMath\TerminalOneAPI\Management
 */
class CampaignRelevantBudgetFlight extends ManagementApiObject implements Endpoint
{

    use NonUpdateable;
    use NonCreateable;
    use NonDeletable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'campaigns/{{campaign_id}}/budget_flights/relevant';
    }

    /**
     * @return mixed
     */
    public function read()
    {

        $uri = str_replace('{{campaign_id}}', $this->options['campaign_id'], $this->uri());
        unset($this->options['campaign_id']);

        return $uri;

    }

}