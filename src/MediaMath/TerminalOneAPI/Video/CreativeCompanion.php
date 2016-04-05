<?php


namespace MediaMath\TerminalOneAPI\Video;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

/**
 * Class CreativeCompanion
 * @package MediaMath\TerminalOneAPI\Video
 */
class CreativeCompanion extends ManagementApiObject implements Endpoint
{
    use NonUpdateable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'creatives/{{creative_id}}/companions';
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

    /**
     * @return mixed
     */
    public function create()
    {

        $uri = str_replace('{{creative_id}}', $this->options['creative_id'], $this->uri());
        unset($this->options['creative_id']);

        return $uri;

    }

    /**
     * @return string
     */
    public function delete()
    {
        $uri = str_replace('{{creative_id}}', $this->options['creative_id'], $this->uri());
        unset($this->options['creative_id']);

        $uri .= '/' . $this->options['id'];
        unset($this->options['id']);

        $uri .= '/delete';

        return $uri;
    }

    /**
     * @return string
     */
    public function update()
    {
        $uri = str_replace('{{creative_id}}', $this->options['creative_id'], $this->uri());
        unset($this->options['creative_id']);

        $uri .= '/' . $this->options['id'];
        unset($this->options['id']);

        return $uri;
    }

}