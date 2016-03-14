<?php


namespace Mediamath\TerminalOneAPI\Management;

use Mediamath\TerminalOneAPI\Infrastructure\Endpoint;
use Mediamath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use Mediamath\TerminalOneAPI\Infrastructure\NonDeletable;

class AtomicCreativeApproval extends ManagementApiObject implements Endpoint
{

    use NonDeletable;

    public function endpoint()
    {
        return 'atomic_creatives/{{creative_id}}/creative_approvals';
    }

    public function read($options = [])
    {

        $uri = str_replace('{{creative_id}}', $options['creative_id'], $this->uri());
        unset($options['creative_id']);

        if (array_key_exists('id', $options)) {
            $uri .= '/' . $options['id'];
            unset($options['id']);
        }

        return $this->apiClient()->read($uri, $options);

    }

}