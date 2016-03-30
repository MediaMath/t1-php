<?php

namespace MediaMath\TerminalOneAPI\Decoder;

use MediaMath\TerminalOneAPI\Infrastructure\ApiResponse;
use MediaMath\TerminalOneAPI\Infrastructure\ApiResponseMeta;
use MediaMath\TerminalOneAPI\Infrastructure\Decodable;

class CSVResponseDecoder implements Decodable
{

    private $flag;

    public function __construct($flag = CSVDecoder::NO_EXTRACT_HEADINGS)
    {
        $this->flag = $flag;

    }

    public function decode($api_response)
    {

        $array = $this->loadCSVData($api_response);

        $tmp = [];
        if ($this->flag == CSVDecoder::EXTRACT_HEADINGS) {
            foreach ($array['data'] AS $values) {
                $tmp[] = array_combine($array['headings'], $values);
            }
            return new ApiResponse(new ApiResponseMeta(), $tmp);
        }

        return new ApiResponse(new ApiResponseMeta(), $array['data']);

    }

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

    private function getHeadings($data)
    {
        $headings = [];

        foreach ($data[0] AS $value) {
            $headings[] = $value;
        }

        return $headings;

    }

    private function getData($data)
    {

        return array_values($data);

    }


}