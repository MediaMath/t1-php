<?php

namespace Mediamath\TerminalOneAPI\Infrastructure;

trait NonUpdateable {

    public function update($data) {
        throw new \Exception("Cannot update objects on this endpoint");
    }

}