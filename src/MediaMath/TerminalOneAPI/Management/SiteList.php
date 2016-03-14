<?php


namespace Mediamath\TerminalOneAPI\Management;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonUpdateable;

class SiteList extends ManagementApiObject implements Endpoint
{

    use NonUpdateable;

    public function endpoint()
    {
        return 'site_lists';
    }

    public function read($options = [])
    {

        if (array_key_exists('id', $options)) {

            $uri = $this->uri();

            $uri .= '/' . $options['id'] . '/download.csv';
            unset($options['id']);

            return $this->apiClient()->read($uri, $options);
        }

        return parent::read($options);

    }

}