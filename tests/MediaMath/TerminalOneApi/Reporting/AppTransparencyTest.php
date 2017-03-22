<?php

namespace Tests\MediaMath\TerminalOneApi\Reporting;

use MediaMath\TerminalOneAPI\Reporting\AppTransparency;
use PHPUnit\Framework\TestCase;

class AppTransparencyTest extends TestCase
{

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotCreateException
     */
    public function testCannotCreate()
    {

        (new AppTransparency())->create();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotDeleteException
     */
    public function testCannotDelete()
    {

        (new AppTransparency())->delete();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotUpdateException
     */
    public function testCannotUpdate()
    {

        (new AppTransparency())->update();

    }

    /**
     *
     */
    public function testCanRead()
    {

        $uri = (new AppTransparency())->read();
        $this->assertEquals('https://api.mediamath.com/reporting/v1/std/app_transparency', $uri);
    }

}

