<?php


namespace Mediamath\TerminalOneAPI\Management;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonCreateable;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;

class SiteList extends ManagementApiObject implements Endpoint
{

    use NonDeletable;
    use NonCreateable;

    public function endpoint()
    {
        return 'site_lists';
    }

    public function download($options = [])
    {

        $uri = $this->uri();

        $uri .= '/' . $options['id'] . '/download.csv';
        unset($options['id']);

        return $this->apiClient()->read($uri, $options);

    }

    public function upload($data)
    {
        $uri = $this->uri() . '/upload';

        return $this->apiClient()->create($uri, $data);

    }

    public function update($data)
    {

        $uri = $this->uri();

        $uri .= '/' . $data['id'] . '/domains';
        unset($data['id']);

        return $this->apiClient()->read($uri, $data);

    }

}