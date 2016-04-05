<?php


namespace MediaMath\TerminalOneAPI\Video;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

/**
 * Class CreativeUpload
 * @package MediaMath\TerminalOneAPI\Video
 */
class CreativeUpload extends ManagementApiObject implements Endpoint
{
    use NonCreateable;
    use NonUpdateable;
    use NonDeletable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'creatives/{{creative_id}}/upload';
    }

    /**
     * @return mixed
     */
    public function create()
    {

        $uri = str_replace('{{creative_id}}', $this->options['creative_id'], $this->uri());
        unset($this->options['creative_id']);

        return $uri;

    }

}