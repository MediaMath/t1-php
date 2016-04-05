<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonReadable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

/**
 * Class CreativeAsset
 * @package MediaMath\TerminalOneAPI\Management
 */
class CreativeAsset extends ManagementApiObject implements Endpoint
{
    use NonCreateable;
    use NonReadable;
    use NonUpdateable;
    use NonDeletable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'creative_assets';
    }

    /**
     * @return string
     */
    public function upload()
    {
        return $this->uri() . '/upload';

    }

    /**
     * @return string
     */
    public function approve()
    {
        return $this->uri() . '/approve';

    }

}