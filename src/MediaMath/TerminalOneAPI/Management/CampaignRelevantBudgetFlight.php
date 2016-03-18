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

    public function read()
    {

        $uri = str_replace('{{campaign_id}}', $this->options['campaign_id'], $this->uri());
        unset($this->options['campaign_id']);

        return $uri;

    }

}