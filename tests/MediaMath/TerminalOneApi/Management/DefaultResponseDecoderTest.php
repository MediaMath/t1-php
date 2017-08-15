<?php
namespace Tests\MediaMath\TerminalOneApi\Management;

use MediaMath\TerminalOneAPI\Decoder\DefaultResponseDecoder;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: mbucse
 * Date: 02/12/2016
 * Time: 15:42
 */
class DealTest  extends TestCase
{

    /**
     * @test
     */
    public function decodeJson()
    {
        $headers = $this->getMockBuilder('MediaMath\TerminalOneAPI\Infrastructure\HttpResponseHeaders')->getMock();
        $headers->method('contentType')->willReturn("application/json");
        $api_response_mock = $this->getMockBuilder('MediaMath\TerminalOneAPI\Infrastructure\HttpResponse')
            ->disableOriginalConstructor()
            ->getMock();

        $api_response_mock->method('headers')->willReturn($headers);
        $api_response_mock->method('body')->willReturn(json_encode(['meta' => ['a' => 'b']]));
        $obj = new DefaultResponseDecoder;
        $obj->decode($api_response_mock);

        $this->assertInstanceOf('MediaMath\TerminalOneAPI\Infrastructure\ApiResponseMeta', $obj->decode($api_response_mock)->meta());
    }

}