<?php

namespace Tests\MediaMath\TerminalOneApi\Reporting;
use MediaMath\TerminalOneAPI\Reporting\Watermark;
use PHPUnit\Framework\TestCase;

class WatermarkTest extends TestCase
{

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotCreateException
     */
    public function testCannotCreate()
    {

        (new Watermark())->create();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotDeleteException
     */
    public function testCannotDelete()
    {

        (new Watermark())->delete();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotUpdateException
     */
    public function testCannotUpdate()
    {

        (new Watermark())->update();

    }

    public function testCanRead()
    {
        $expected = 'https://api.mediamath.com/reporting/v1/std/watermark';
        $this->assertEquals($expected, (new Watermark())->read());

    }

}