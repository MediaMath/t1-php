<?php


namespace Mediamath\TerminalOneAPI\Management;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonCreateable;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;
use Mediamath\TerminalOneAPI\Infrastructure\NonUpdateable;

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