<?php

namespace Mediamath\TerminalOneAPI\Infrastructure;

abstract class ReportingApiObject extends ApiObject
{

    abstract protected function endpoint();

    public function uri()
    {
        return 'https://api.mediamath.com/reporting/v1/std/' . $this->endpoint();
    }

}