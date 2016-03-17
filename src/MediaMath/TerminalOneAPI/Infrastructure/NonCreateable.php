<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

use MediaMath\TerminalOneAPI\Exception\CannotCreateException;

trait NonCreateable {

    public function create($data) {
        throw new CannotCreateException("Cannot create objects on this endpoint");
    }

}