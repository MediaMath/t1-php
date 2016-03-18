<?php

class DeviceTechnologyTest extends PHPUnit_Framework_TestCase
{

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotCreateException
     */
    public function testCannotCreate()
    {

        $report = (new \MediaMath\TerminalOneAPI\Reporting\DeviceTechnology())->create();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotDeleteException
     */
    public function testCannotDelete()
    {

        $report = (new \MediaMath\TerminalOneAPI\Reporting\DeviceTechnology())->delete();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotUpdateException
     */
    public function testCannotUpdate()
    {

        $report = (new \MediaMath\TerminalOneAPI\Reporting\DeviceTechnology())->update();

    }

    public function testCanRead()
    {

        $report = (new \MediaMath\TerminalOneAPI\Reporting\DeviceTechnology())->read();

    }

}