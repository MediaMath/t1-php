<?php


namespace Mediamath\TerminalOneAPI\Video;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonCreateable;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;
use Mediamath\TerminalOneAPI\Infrastructure\NonUpdateable;

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