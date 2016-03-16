<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

trait NonCreateable {

    public function create($data) {
        throw new \Exception("Cannot create objects on this endpoint");
    }

}