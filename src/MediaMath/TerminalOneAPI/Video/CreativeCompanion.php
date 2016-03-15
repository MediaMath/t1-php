<?php


namespace Mediamath\TerminalOneAPI\Video;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonCreateable;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;
use Mediamath\TerminalOneAPI\Infrastructure\NonUpdateable;

class CreativeCompanion extends ManagementApiObject implements Endpoint
{
    use NonUpdateable;

    public function endpoint()
    {
        return 'creatives/{{creative_id}}/companions';
    }

    public function read($options = [])
    {

        $uri = str_replace('{{creative_id}}', $options['creative_id'], $this->uri());
        unset($options['creative_id']);

        if(isset($options['id'])) {
            $uri .= '/' . $options['id'];
            unset($options['id']);
        }

        return $this->apiClient()->read($uri, $options);

    }

    public function create($options = [])
    {

        $uri = str_replace('{{creative_id}}', $options['creative_id'], $this->uri());
        unset($options['creative_id']);

        return $this->apiClient()->create($uri, $options);

    }

    public function delete($data = [])
    {
        $uri = str_replace('{{creative_id}}', $data['creative_id'], $this->uri());
        unset($data['creative_id']);

        $uri .= '/' . $data['id'];
        unset($data['id']);

        $uri .= '/delete';
        return $this->apiClient()->update($uri, $data);
    }

    public function update($data = [])
    {
        $uri = str_replace('{{creative_id}}', $data['creative_id'], $this->uri());
        unset($data['creative_id']);

        $uri .= '/' . $data['id'];
        unset($data['id']);

        return $this->apiClient()->update($uri, $data);
    }

}