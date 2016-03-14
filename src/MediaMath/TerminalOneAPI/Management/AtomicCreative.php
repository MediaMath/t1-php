<?php


namespace Mediamath\TerminalOneAPI\Management;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;

class AtomicCreative extends ManagementApiObject implements Endpoint
{

    use NonDeletable;

    public function endpoint()
    {
        return 'atomic_creatives';
    }

    public function resetEditedTag($options)
    {

        $uri = $this->uri() . '/' . $options['id'] . '/reset_edited_tag';
        unset($options['id']);

        return $this->apiClient()->create($uri, $options);


    }

}