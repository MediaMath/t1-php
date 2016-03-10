<?php


namespace Mediamath\TerminalOneAPI\Management\Targeting;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonCreateable;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;
use Mediamath\TerminalOneAPI\Infrastructure\NonUpdateable;

class StrategyRetiredAudienceSegment extends ManagementApiObject implements Endpoint
{

    use NonDeletable;
    use NonCreateable;
    use NonUpdateable;

    public function endpoint()
    {
        return 'strategies/{{strategy_id}}/retired_audience_segments';
    }

    public function read($options = [])
    {
        $uri = str_replace('{{strategy_id}}', $options['id'], $this->uri());

        return $this->apiClient()->read($uri, $options);

    }

}