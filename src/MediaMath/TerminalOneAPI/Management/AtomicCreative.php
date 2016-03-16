<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;

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