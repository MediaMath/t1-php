<?php


namespace Mediamath\TerminalOneAPI\Video;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\NonUpdateable;
use Mediamath\TerminalOneAPI\Infrastructure\VideoApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonCreateable;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;

class CreativeVASTValidation extends VideoApiObject implements Endpoint
{

    use NonDeletable;
    use NonCreateable;
    use NonUpdateable;

    public function endpoint()
    {
        return 'creatives/validateVAST';
    }

}