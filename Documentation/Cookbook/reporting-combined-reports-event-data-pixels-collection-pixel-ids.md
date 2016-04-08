# How to get combined reports for event and data pixels for a collection of pixel IDs

The reports data for event and data pixels are provided by different endpoints on the T1 API with no native option for retrieving data for both in one call.

Ordinarily we would assume there is a need to filter the pixel IDs to make specific calls for event pixels and data pixels. However, we can make use of a feature of the API where we can send the same set of IDs to both endpoints and only relevant data will be returned.

First we need to create a custom response decoder which will allow us to collate the CSV responses. There's no point re-inventing the wheel as far as decoding the CSV goes, so we can extend the `CSVResponseDecoder` and use its output as the basis for our own formatting. In this implementation we allow for returning the collated data formatted in different ways:

##### Normal response format

```
    [data] => Array
        (
            [0] => Array
                (
                    [start_date] => 2016-04-03
                    [end_date] => 2016-04-03
                    [pixel_name] => My_Tracked_Pixel
                    [pixel_id] => 981...
                    [referrer] => secure.example-ad-server.com/some-page.html
                    [loads] => 1
                    [uniques] => 1
                )

            [1] => Array
                (
                    [start_date] => 2016-04-02
                    [end_date] => 2016-04-02
                    [pixel_name] => My_Tracked_Pixel
                    [pixel_id] => 981...
                    [referrer] => www.example.com/signup/account
                    [loads] => 4
                    [uniques] => 4
```

##### Showing totals only

```
    [data] => Array
        (
            [0] => Array
                (
                    [start_date] => 2016-04-03
                    [end_date] => 2016-04-03
                    [pixel_name] => My_Tracked_Pixel
                    [pixel_id] => 981...
                    [referrer] => Total
                    [loads] => 19109
                    [uniques] => 17428
                )

            [1] => Array
                (
                    [start_date] => 2016-04-04
                    [end_date] => 2016-04-04
                    [pixel_name] => Another_Tracked_Pixel
                    [pixel_id] => 978...
                    [referrer] => Total
                    [loads] => 288
                    [uniques] => 193
                )
```

##### Collated by pixel id showing all data

```
    [data] => Array
        (
            [981...] => Array
                (
                    [2016-04-03] => Array
                        (
                            [0] => Array
                                (
                                    [start_date] => 2016-04-03
                                    [end_date] => 2016-04-03
                                    [pixel_name] => My_Tracked_Pixel
                                    [pixel_id] => 981...
                                    [referrer] => secure.example-ad-server.com/some-page.html
                                    [loads] => 1
                                    [uniques] => 1
                                )

                            [1] => Array
                                (
                                    [start_date] => 2016-04-03
                                    [end_date] => 2016-04-03
                                    [pixel_name] => My_Tracked_Pixel
                                    [pixel_id] => 981...
                                    [referrer] => Total
                                    [loads] => 19109
                                    [uniques] => 17428
                                )
```

##### Collated by pixel id, showing only totals

```
    [data] => Array
        (
            [981...] => Array
                (
                    [2016-04-03] => Array
                        (
                            [start_date] => 2016-04-03
                            [end_date] => 2016-04-03
                            [pixel_name] => My_Tracked_Pixel
                            [pixel_id] => 981...
                            [referrer] => Total
                            [loads] => 19109
                            [uniques] => 17428
                        )
                    [2016-04-02] => Array
                        (
                            [start_date] => 2016-04-02
                            [end_date] => 2016-04-02
                            [pixel_name] => My_Tracked_Pixel
                            [pixel_id] => 981...
                            [referrer] => Total
                            [loads] => 14229
                            [uniques] => 13356
                        )
```

### The custom decoder

```php
<?php

// PixelCSVResponseDecoder.php

namespace Acme;

use MediaMath\TerminalOneAPI\Decoder\CSVDecoder;
use MediaMath\TerminalOneAPI\Decoder\CSVResponseDecoder;
use MediaMath\TerminalOneAPI\Infrastructure\ApiResponse;
use MediaMath\TerminalOneAPI\Infrastructure\HttpResponse;

class PixelCSVResponseDecoder extends CSVResponseDecoder
{

    private $decode_format;

    public function __construct($decode_format)
    {
        // Using CSVDecoder::EXTRACT_HEADINGS will give us an associative array to play with
        parent::__construct(CSVDecoder::EXTRACT_HEADINGS);
        $this->decode_format = $decode_format;
    }

    public function decode(HttpResponse $api_response)
    {
        $api_response = parent::decode($api_response);

        return new ApiResponse($api_response->meta(), $this->format($api_response->data()));

    }

    private function format($data)
    {

        switch ($this->decode_format) {
            case "totals_only" :
                return $this->totalsOnly($data);
                break;
            case "by_pixel" :
                return $this->byPixel($data);
                break;
            case "by_pixel_no_total" :
                return $this->byPixelNoTotal($data);
                break;
            default:
                return $this->full($data);
                break;
        }

    }

    private function totalsOnly($data)
    {

        $tmp = [];

        foreach ($data AS $key => $value) {
            if ($value['referrer'] == 'Total') {
                $tmp[] = $data[$key];
            }
        }

        return $tmp;

    }

    private function byPixel($data)
    {

        $tmp = [];

        foreach ($data AS $key => $value) {

            if (!array_key_exists($value['pixel_id'], $tmp)) {
                $tmp[$value['pixel_id']] = [];
            }

            if ($value['referrer'] == 'Total') {
                $tmp[$value['pixel_id']][$value['end_date']] = $data[$key];
            }

        }

        return $tmp;

    }

    private function byPixelNoTotal($data)
    {

        $tmp = [];

        foreach ($data AS $key => $value) {

            if ($value['referrer'] == 'Total') {
                continue;
            }

            if (!array_key_exists($value['pixel_id'], $tmp)) {
                $tmp[$value['pixel_id']] = [];
            }

            $tmp[$value['pixel_id']][$value['end_date']] = $data[$key];
        }

        return $tmp;


    }

    private function full($data)
    {

        return $data;

    }


}
```

Now, to fetch the cumulative results we need to make API calls for both endpoints and concatenate the resulting arrays

```php
<?php 

    // controller.php

    $events_pixels = $client->read(new EventPixelLoad([
        'time_window' => 'last_7_days',
        'time_rollup' => 'by_day',
        'filter' => 'organization_id=' . $org_id . '&pixel_id=' . implode(',', $pixel_ids),
        'dimensions' => 'pixel_name,pixel_id,referrer',
    ]), new PixelCSVResponseDecoder("by_pixel_no_total"));

    $data_pixels = $client->read(new DataPixelLoad([
        'time_window' => 'last_7_days',
        'time_rollup' => 'by_day',
        'filter' => 'organization_id=' . $org_id . '&pixel_id=' . implode(',', $pixel_ids),
        'dimensions' => 'pixel_name,pixel_id,referrer',
    ]), new PixelCSVResponseDecoder("by_pixel_no_total"));


    $data = $events_pixels->data() + $data_pixels->data();
    
    var_dump($data);
```
