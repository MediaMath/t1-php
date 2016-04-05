<?php

namespace MediaMath\TerminalOneAPI\Decoder;

use MediaMath\TerminalOneAPI\Infrastructure\ApiResponse;
use MediaMath\TerminalOneAPI\Infrastructure\ApiResponseMeta;
use MediaMath\TerminalOneAPI\Infrastructure\Decodable;
use MediaMath\TerminalOneAPI\Infrastructure\HttpResponse;

/**
 * Class CSVResponseDecoder
 * @package MediaMath\TerminalOneAPI\Decoder
 */
class CSVResponseDecoder implements Decodable
{

    /**
     * @var int
     */
    private $flag;

    /**
     * CSVResponseDecoder constructor.
     * @param int $flag
     */
    public function __construct($flag = CSVDecoder::NO_EXTRACT_HEADINGS)
    {
        $this->flag = $flag;

    }

    /**
     * @param HttpResponse $api_response
     * @return ApiResponse
     */
    public function decode(HttpResponse $api_response)
    {

        $array = $this->loadCSVData($api_response->body());

        $tmp = [];
        if ($this->flag == CSVDecoder::EXTRACT_HEADINGS) {
            foreach ($array['data'] AS $values) {
                $tmp[] = array_combine($array['headings'], $values);
            }
            return new ApiResponse(new ApiResponseMeta(), $tmp);
        }

        return new ApiResponse(new ApiResponseMeta(), $array['data']);

    }

    /**
     * @param $csv
     * @return array
     */
    private function loadCSVData($csv)
    {

        $csv_data = array_map("str_getcsv", explode("\n", trim($csv)));

        if ($this->flag == CSVDecoder::EXTRACT_HEADINGS) {
            $headings = $this->getHeadings($csv_data);
            unset($csv_data[0]);
            $data = $this->getData($csv_data);
            return ['headings' => $headings, 'data' => $data];

        }

        return ['data' => $this->getData($csv_data)];

    }

    /**
     * @param $data
     * @return array
     */
    private function getHeadings($data)
    {
        $headings = [];

        foreach ($data[0] AS $value) {
            $headings[] = $value;
        }

        return $headings;

    }

    /**
     * @param $data
     * @return mixed
     */
    private function getData($data)
    {
        return array_values($data);
    }


}