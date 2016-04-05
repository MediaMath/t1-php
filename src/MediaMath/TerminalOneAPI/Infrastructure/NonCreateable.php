<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

use MediaMath\TerminalOneAPI\Exception\CannotCreateException;

/**
 * Class NonCreateable
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
trait NonCreateable {

    /**
     * @throws CannotCreateException
     */
    public function create() {
        throw new CannotCreateException("Cannot create objects on this endpoint");
    }

}