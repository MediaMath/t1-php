<?php

namespace MediaMath\TerminalOneAPI\Pagination;

use MediaMath\TerminalOneAPI\Infrastructure\ApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\Clientable;
use MediaMath\TerminalOneAPI\Infrastructure\Decodable;
use MediaMath\TerminalOneAPI\Infrastructure\Paginatable;

class Pagination implements Paginatable
{

    private $endpoint;
    private $decoder;
    private $api_client;
    private $current_page = 1;
    private $num_per_page = 100;
    private $num_results;
    private $result_cache = [];

    public function __construct(ApiObject $endpoint, Decodable $decoder, Clientable $api_client)
    {

        $this->endpoint = $endpoint;
        $this->decoder = $decoder;
        $this->api_client = $api_client;

        $this->num_results = null;

    }

    public function page($page_number)
    {

        $this->current_page = $page_number;

        if ($page_number < 1) {
            $this->current_page = 1;
        }

        if ($page_number >= $this->numPages()) {
            $this->current_page = $this->numPages();
        }

        if(isset($this->result_cache[$this->current_page - 1])) {
            return $this->result_cache[$this->current_page - 1];
        }

        $result = $this->fetchData();

        $this->result_cache[$this->current_page - 1] = $result;

        $this->num_results = $result->meta()->totalCount();

        return $result;

    }

    public function previous()
    {
        return $this->page($this->current_page - 1);
    }

    public function next()
    {
        return $this->page($this->current_page + 1);
    }

    public function first()
    {
        return $this->page(1);
    }

    public function last()
    {
        $this->current_page = null;
        return $this->page($this->numPages());
    }

    public function numPages()
    {

        $count = ceil($this->numResults() / $this->num_per_page);

        if ($count == 0) {
            return 1;
        }

        return $count;
    }

    public function numResults()
    {

        if ($this->num_results === null && $this->current_page != 1) {

            $options = $this->options([
                'page_limit' => 1,
                'full' => null
            ]);

            $result = $this->fetchData($options);

            $this->num_results = $result->meta()->totalCount();

        }

        return $this->num_results;
    }

    private function options($custom_options = [])
    {

        $options = $this->endpoint->options();
        $options['page_offset'] = $this->pageOffset();

        foreach ($custom_options AS $key => $value) {
            $options[$key] = $value;
        }

        return array_filter($options);
    }

    private function pageOffset()
    {

        if ($this->current_page == null) {
            return null;
        }

        $page = $this->current_page;

        return ($page - 1) * $this->num_per_page;
    }

    private function fetchData($custom_options = [])
    {

        $endpoint_class = get_class($this->endpoint);
        $endpoint = new $endpoint_class($this->options($custom_options));

        return $this->api_client->read($endpoint, $this->decoder);

    }

}