<?php

namespace Tests\MediaMath\TerminalOneApi\Reporting;
use MediaMath\TerminalOneAPI\Reporting\AudienceIndex;
use PHPUnit\Framework\TestCase;

class AudienceIndexTest extends TestCase
{

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotCreateException
     */
    public function testCannotCreate()
    {

        (new AudienceIndex())->create();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotDeleteException
     */
    public function testCannotDelete()
    {

        (new AudienceIndex())->delete();

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotUpdateException
     */
    public function testCannotUpdate()
    {

        (new AudienceIndex())->update();

    }

    public function testCanRead()
    {

        $expected = 'https://api.mediamath.com/reporting/v1/std/audience_index';
        $this->assertEquals($expected, (new AudienceIndex())->read());

    }

}

