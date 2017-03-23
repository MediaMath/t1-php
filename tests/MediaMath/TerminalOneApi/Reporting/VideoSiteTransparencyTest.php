<?php

namespace Tests\MediaMath\TerminalOneApi\Reporting;
use MediaMath\TerminalOneAPI\Reporting\VideoSiteTransparency;
use PHPUnit\Framework\TestCase;

class VideoSiteTransparencyTest extends TestCase
{

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotCreateException
     */
    public function testCannotCreate()
    {

        (new VideoSiteTransparency())->create();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotDeleteException
     */
    public function testCannotDelete()
    {

        (new VideoSiteTransparency())->delete();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotUpdateException
     */
    public function testCannotUpdate()
    {

        (new VideoSiteTransparency())->update();

    }

    public function testCanRead()
    {

        $expected = 'https://api.mediamath.com/reporting/v1/std/video_site_transparency';
        $this->assertEquals($expected, (new VideoSiteTransparency())->read());

    }

}