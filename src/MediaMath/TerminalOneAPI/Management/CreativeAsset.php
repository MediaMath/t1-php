<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonReadable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

class CreativeAsset extends ManagementApiObject implements Endpoint
{
    use NonCreateable;
    use NonReadable;
    use NonUpdateable;
    use NonDeletable;

    public function endpoint()
    {
        return 'creative_assets';
    }

    public function upload()
    {
        return $this->uri() . '/upload';

    }

    public function approve()
    {
        return $this->uri() . '/approve';

    }

}