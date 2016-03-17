<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

use MediaMath\TerminalOneAPI\Exception\CannotDeleteException;

trait NonDeletable {

    public function delete() {
        throw new CannotDeleteException("Cannot delete objects on this endpoint");
    }

}