<?php

namespace Mediamath\TerminalOneAPI\Decoder;

use Mediamath\TerminalOneAPI\Infrastructure\Decodable;

class CSVResponseDecoder implements Decodable
{

    public function decode($api_response)
    {
        $array = $this->loadCSVData($api_response);

        $tmp = [];

        foreach ($array['data'] AS $values) {

            $tmp[] = array_combine($array['headings'], $values);
        }

        return $tmp;
    }


    private function loadCSVData($csv)
    {

        $csv_data = array_map("str_getcsv", explode("\n", trim($csv)));

        $headings = $this->getHeadings($csv_data);
        $data = $this->getData($csv_data);

        return ['headings' => $headings, 'data' => $data];
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
        unset ($data[0]);

        return array_values($data);

    }


}