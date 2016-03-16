<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;

class Creative extends ManagementApiObject implements Endpoint
{

    use NonDeletable;
    use NonCreateable;

    public function endpoint()
    {
        return 'creatives';
    }

    public function upload($data)
    {
        $uri = $this->uri() . '/upload';

        if(isset($data['batch_id'])) {
            $uri .= '/' . $data['batch_id'];
            unset($data['batch_id']);
        }

        return $this->apiClient()->create($uri, $data);

    }

}