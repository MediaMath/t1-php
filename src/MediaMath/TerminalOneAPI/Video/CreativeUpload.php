<?php


namespace MediaMath\TerminalOneAPI\Video;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

class CreativeUpload extends ManagementApiObject implements Endpoint
{
    use NonCreateable;
    use NonUpdateable;
    use NonDeletable;

    public function endpoint()
    {
        return 'creatives/{{creative_id}}/upload';
    }

    public function create($options = [])
    {

        $uri = str_replace('{{creative_id}}', $options['creative_id'], $this->uri());
        unset($options['creative_id']);

        return $this->apiClient()->create($uri, $options);

    }

}