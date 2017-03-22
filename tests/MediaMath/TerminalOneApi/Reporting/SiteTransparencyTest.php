<?php

namespace Tests\MediaMath\TerminalOneApi\Reporting;
use MediaMath\TerminalOneAPI\Reporting\SiteTransparency;
use PHPUnit\Framework\TestCase;

class SiteTransparencyTest extends TestCase
{

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotCreateException
     */
    public function testCannotCreate()
    {

        (new SiteTransparency())->create();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotDeleteException
     */
    public function testCannotDelete()
    {

        (new SiteTransparency())->delete();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotUpdateException
     */
    public function testCannotUpdate()
    {

        (new SiteTransparency())->update();

    }

    public function testCanRead()
    {
        $expected = 'https://api.mediamath.com/reporting/v1/std/site_transparency';
        $this->assertEquals($expected, (new SiteTransparency())->read());

    }

}