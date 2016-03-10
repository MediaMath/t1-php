<?php


namespace Mediamath\TerminalOneAPI\Management\Targeting;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonCreateable;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;
use Mediamath\TerminalOneAPI\Infrastructure\NonUpdateable;

class TargetingSegmentObjective extends ManagementApiObject implements Endpoint
{

    use NonDeletable;
    use NonCreateable;
    use NonUpdateable;

    public function endpoint()
    {
        return 'targeting_segment_objectives';
    }

}