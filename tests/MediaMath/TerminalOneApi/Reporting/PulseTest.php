<?php

namespace Tests\MediaMath\TerminalOneApi\Reporting;
use MediaMath\TerminalOneAPI\Reporting\Pulse;
use PHPUnit\Framework\TestCase;

class PulseTest extends TestCase
{

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotCreateException
     */
    public function testCannotCreate()
    {

        (new Pulse())->create();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotDeleteException
     */
    public function testCannotDelete()
    {

        (new Pulse())->delete();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotUpdateException
     */
    public function testCannotUpdate()
    {

        (new Pulse())->update();

    }

    public function testCanRead()
    {
        $expected = 'https://api.mediamath.com/reporting/v1/std/pulse';
        $this->assertEquals($expected, (new Pulse())->read());

    }

}