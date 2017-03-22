<?php

namespace Tests\MediaMath\TerminalOneApi\Reporting;
use MediaMath\TerminalOneAPI\Reporting\DayPart;
use PHPUnit\Framework\TestCase;

class DayPartTest extends TestCase
{

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotCreateException
     */
    public function testCannotCreate()
    {

        (new DayPart())->create();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotDeleteException
     */
    public function testCannotDelete()
    {

        (new DayPart())->delete();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotUpdateException
     */
    public function testCannotUpdate()
    {

        (new DayPart())->update();

    }

    public function testCanRead()
    {
        $expected = 'https://api.mediamath.com/reporting/v1/std/day_part';
        $this->assertEquals($expected, (new DayPart())->read());

    }

}