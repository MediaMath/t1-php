<?php


namespace Mediamath\TerminalOneAPI\Management;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonCreateable;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;
use Mediamath\TerminalOneAPI\Infrastructure\NonReadable;
use Mediamath\TerminalOneAPI\Infrastructure\NonUpdateable;

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

    public function upload($data)
    {
        $uri = $this->uri() . '/upload';

        return $this->apiClient()->create($uri, $data);

    }

    public function approve($data)
    {
        $uri = $this->uri() . '/approve';

        return $this->apiClient()->create($uri, $data);

    }

}