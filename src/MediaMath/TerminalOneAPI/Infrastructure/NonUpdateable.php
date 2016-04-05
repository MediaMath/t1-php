<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

use MediaMath\TerminalOneAPI\Exception\CannotUpdateException;

/**
 * Class NonUpdateable
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
trait NonUpdateable {

    /**
     * @throws CannotUpdateException
     */
    public function update() {
        throw new CannotUpdateException("Cannot update objects on this endpoint");
    }

}