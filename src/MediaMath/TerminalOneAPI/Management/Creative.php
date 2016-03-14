<?php


namespace Mediamath\TerminalOneAPI\Management;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonCreateable;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;

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