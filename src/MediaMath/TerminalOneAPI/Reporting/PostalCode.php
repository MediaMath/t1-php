<?php


namespace MediaMath\TerminalOneAPI\Reporting;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ReportingApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

/**
 * Class PostalCode
 * @package MediaMath\TerminalOneAPI\Reporting
 */
class PostalCode extends ReportingApiObject implements Endpoint
{

    use NonDeletable;
    use NonUpdateable;
    use NonCreateable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'postal_code';
    }

}
