<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

class CampaignRelevantBudgetFlight extends ManagementApiObject implements Endpoint
{

    use NonUpdateable;
    use NonCreateable;
    use NonDeletable;

    public function endpoint()
    {
        return 'campaigns/{{campaign_id}}/budget_flights/relevant';
    }

    public function read($options = [])
    {

        $uri = str_replace('{{campaign_id}}', $options['campaign_id'], $this->uri());
        unset($options['campaign_id']);

        return $this->apiClient()->read($uri, $options);

    }

}