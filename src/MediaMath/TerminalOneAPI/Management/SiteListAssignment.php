<?php


namespace Mediamath\TerminalOneAPI\Management;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonCreateable;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;
use Mediamath\TerminalOneAPI\Infrastructure\NonUpdateable;

class SiteListAssignment extends ManagementApiObject implements Endpoint
{
    use NonCreateable;
    use NonUpdateable;
    use NonDeletable;

    public function endpoint()
    {
        return 'site_lists/{{id}}/assignments';
    }

    public function read($options = [])
    {

        $uri = str_replace('{{id}}', $options['id'], $this->uri());
        unset($options['id']);

        return $this->apiClient()->read($uri, $options);

    }

}