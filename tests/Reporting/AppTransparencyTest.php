<?php

use PHPUnit\Framework\TestCase;

class AppTransparencyTest extends TestCase
{

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotCreateException
     */
    public function testCannotCreate()
    {

        (new \MediaMath\TerminalOneAPI\Reporting\AppTransparency())->create();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotDeleteException
     */
    public function testCannotDelete()
    {

        (new \MediaMath\TerminalOneAPI\Reporting\AppTransparency())->delete();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotUpdateException
     */
    public function testCannotUpdate()
    {

        (new \MediaMath\TerminalOneAPI\Reporting\AppTransparency())->update();

    }

    /**
     *
     */
    public function testCanRead()
    {

        $uri = (new \MediaMath\TerminalOneAPI\Reporting\AppTransparency())->read();
        $this->assertEquals('https://api.mediamath.com/reporting/v1/std/app_transparency', $uri);
    }

}

