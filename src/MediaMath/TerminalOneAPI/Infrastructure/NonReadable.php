<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

/**
 * Class NonReadable
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
trait NonReadable {

    /**
     * @throws \Exception
     */
    public function read() {
        throw new \Exception("Cannot read objects on this endpoint");
    }

}