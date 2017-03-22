<?php

namespace Tests\MediaMath\TerminalOneApi\Reporting;
use PHPUnit\Framework\TestCase;
use MediaMath\TerminalOneAPI\Reporting\AudienceIndexPixel;

class AudienceIndexPixelTest extends TestCase
{

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotCreateException
     */
    public function testCannotCreate()
    {

        (new AudienceIndexPixel())->create();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotDeleteException
     */
    public function testCannotDelete()
    {

        (new AudienceIndexPixel())->delete();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotUpdateException
     */
    public function testCannotUpdate()
    {

        (new AudienceIndexPixel())->update();

    }

    public function testCanRead()
    {
        $expected = 'https://api.mediamath.com/reporting/v1/std/audience_index_pixel';
        $this->assertEquals($expected, (new AudienceIndexPixel())->read());
    }

}

