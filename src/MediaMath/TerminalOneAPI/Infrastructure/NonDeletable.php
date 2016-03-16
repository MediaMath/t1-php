<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

trait NonDeletable {

    public function delete() {
        throw new \Exception("Cannot delete objects on this endpoint");
    }

}