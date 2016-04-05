<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

use MediaMath\TerminalOneAPI\Exception\CannotDeleteException;

/**
 * Class NonDeletable
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
trait NonDeletable {

    /**
     * @throws CannotDeleteException
     */
    public function delete() {
        throw new CannotDeleteException("Cannot delete objects on this endpoint");
    }

}