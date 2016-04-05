<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

/**
 * Class UserSetting
 * @package MediaMath\TerminalOneAPI\Management
 */
class UserSetting extends ManagementApiObject implements Endpoint
{

    use NonCreateable;
    use NonDeletable;
    use NonUpdateable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'users/{{user_id}}/settings';
    }

    /**
     * @return mixed
     */
    public function read()
    {

        $uri = str_replace('{{user_id}}', $this->options['user_id'], $this->uri());
        unset($this->options['user_id']);

        return $uri;

    }

}
