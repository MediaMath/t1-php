<?php


namespace MediaMath\TerminalOneAPI\Video;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;
use MediaMath\TerminalOneAPI\Infrastructure\VideoApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;

/**
 * Class CreativeDetailedVASTValidation
 * @package MediaMath\TerminalOneAPI\Video
 */
class CreativeDetailedVASTValidation extends VideoApiObject implements Endpoint
{

    use NonDeletable;
    use NonCreateable;
    use NonUpdateable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'creatives/validateVASTDetailed';
    }

}