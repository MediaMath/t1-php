<?php


namespace MediaMath\TerminalOneAPI\Video;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

/**
 * Class CreativeVariant
 * @package MediaMath\TerminalOneAPI\Video
 */
class CreativeVariant extends ManagementApiObject implements Endpoint
{
    use NonCreateable;
    use NonUpdateable;
    use NonDeletable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'creatives/{{creative_id}}/variants';
    }

    /**
     * @return string
     */
    public function read()
    {

        $uri = str_replace('{{creative_id}}', $this->options['creative_id'], $this->uri());
        unset($this->options['creative_id']);

        if(isset($this->options['id'])) {
            $uri .= '/' . $this->options['id'];
            unset($this->options['id']);
        }

        return $uri;

    }

}