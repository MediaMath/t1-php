<?php

class AudienceIndexPixelTest extends PHPUnit_Framework_TestCase
{

    protected $client;

    protected function setUp()
    {
        $this->client = $this->getMockBuilder(\MediaMath\TerminalOneAPI\ApiClient::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->client->method('read')
            ->willReturn('{}');

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotCreateException
     */
    public function testCannotCreate()
    {

        $report = (new \MediaMath\TerminalOneAPI\Reporting\AudienceIndexPixel($this->client))->create([]);

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotDeleteException
     */
    public function testCannotDelete()
    {

        $report = (new \MediaMath\TerminalOneAPI\Reporting\AudienceIndexPixel($this->client))->delete([]);

    }

    /**
     * @expectedException \MediaMath\TerminalOneAPI\Exception\CannotUpdateException
     */
    public function testCannotUpdate()
    {

        $report = (new \MediaMath\TerminalOneAPI\Reporting\AudienceIndexPixel($this->client))->update([]);

    }

    public function testCanRead()
    {

        $report = (new \MediaMath\TerminalOneAPI\Reporting\AudienceIndexPixel($this->client))->read();

    }

}

