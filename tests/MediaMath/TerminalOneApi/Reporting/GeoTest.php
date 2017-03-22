<?php

namespace Tests\MediaMath\TerminalOneApi\Reporting;
use MediaMath\TerminalOneAPI\Reporting\Geo;
use PHPUnit\Framework\TestCase;

class GeoTest extends TestCase
{

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotCreateException
     */
    public function testCannotCreate()
    {

        (new Geo())->create();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotDeleteException
     */
    public function testCannotDelete()
    {

        (new Geo())->delete();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotUpdateException
     */
    public function testCannotUpdate()
    {

        (new Geo())->update();

    }

    public function testCanRead()
    {
        $expected = 'https://api.mediamath.com/reporting/v1/std/geo';
        $this->assertEquals($expected, (new Geo())->read());

    }

}