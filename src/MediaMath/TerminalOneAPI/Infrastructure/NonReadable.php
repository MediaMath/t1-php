<?php

namespace Mediamath\TerminalOneAPI\Infrastructure;

trait NonReadable {

    public function read() {
        throw new \Exception("Cannot read objects on this endpoint");
    }

}