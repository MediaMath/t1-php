<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

use MediaMath\TerminalOneAPI\Exception\CannotUpdateException;

trait NonUpdateable {

    public function update() {
        throw new CannotUpdateException("Cannot update objects on this endpoint");
    }

}