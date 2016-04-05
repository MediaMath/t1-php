<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;

/**
 * Class AtomicCreativeApproval
 * @package MediaMath\TerminalOneAPI\Management
 */
class AtomicCreativeApproval extends ManagementApiObject implements Endpoint
{

    use NonDeletable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'atomic_creatives/{{creative_id}}/creative_approvals';
    }

    /**
     * @return string
     */
    public function read()
    {

        $uri = str_replace('{{creative_id}}', $this->options['creative_id'], $this->uri());
        unset($this->options['creative_id']);

        if (array_key_exists('id', $this->options)) {
            $uri .= '/' . $this->options['id'];
            unset($this->options['id']);
        }

        return $uri;

    }

}