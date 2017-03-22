<?php

class AudienceIndexPixelTest extends PHPUnit\Framework\TestCase
{

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotCreateException
     */
    public function testCannotCreate()
    {

        $report = (new \MediaMath\TerminalOneAPI\Reporting\AudienceIndexPixel())->create();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotDeleteException
     */
    public function testCannotDelete()
    {

        $report = (new \MediaMath\TerminalOneAPI\Reporting\AudienceIndexPixel())->delete();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotUpdateException
     */
    public function testCannotUpdate()
    {

        $report = (new \MediaMath\TerminalOneAPI\Reporting\AudienceIndexPixel())->update();

    }

    public function testCanRead()
    {

        $report = (new \MediaMath\TerminalOneAPI\Reporting\AudienceIndexPixel())->read();

    }

}

