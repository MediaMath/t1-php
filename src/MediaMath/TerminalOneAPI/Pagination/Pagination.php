<?php

namespace MediaMath\TerminalOneAPI\Pagination;

use MediaMath\TerminalOneAPI\Infrastructure\ApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\Clientable;
use MediaMath\TerminalOneAPI\Infrastructure\Decodable;
use MediaMath\TerminalOneAPI\Infrastructure\Paginatable;

/**
 * Class Pagination
 * @package MediaMath\TerminalOneAPI\Pagination
 */
class Pagination implements Paginatable
{

    /**
     * @var ApiObject
     */
    private $endpoint;

    /**
     * @var Decodable
     */
    private $decoder;

    /**
     * @var Clientable
     */
    private $api_client;

    /**
     * @var int
     */
    private $current_page = 1;

    /**
     * @var int
     */
    private $num_per_page = 100;

    /**
     * @var null
     */
    private $num_results;

    /**
     * @var array
     */
    private $result_cache = [];

    /**
     * Pagination constructor.
     * @param ApiObject $endpoint
     * @param Decodable $decoder
     * @param Clientable $api_client
     */
    public function __construct(ApiObject $endpoint, Decodable $decoder, Clientable $api_client)
    {

        $this->endpoint = $endpoint;
        $this->decoder = $decoder;
        $this->api_client = $api_client;

        $this->num_results = null;

    }

    /**
     * @param $page_number
     * @return mixed
     */
    public function page($page_number)
    {

        $this->current_page = $page_number;

        if ($page_number < 1) {
            $this->current_page = 1;
        }

        if ($page_number >= $this->numPages()) {
            $this->current_page = $this->numPages();
        }

        if (isset($this->result_cache[$this->current_page - 1])) {
            return $this->result_cache[$this->current_page - 1];
        }

        return $this->resultForPage($this->current_page - 1);

    }

    private function resultForPage($page_num, $options = [])
    {

        $result = $this->fetchData($options);

        $this->result_cache[$page_num] = $result;

        $this->num_results = $result->meta()->totalCount();

        return $result;

    }

    /**
     * @return mixed
     */
    public function previous()
    {
        return $this->page($this->current_page - 1);
    }

    /**
     * @return mixed
     */
    public function next()
    {
        return $this->page($this->current_page + 1);
    }

    /**
     * @return mixed
     */
    public function first()
    {
        return $this->page(1);
    }

    /**
     * @return mixed
     */
    public function last()
    {
        $this->current_page = null;
        return $this->page($this->numPages());
    }

    /**
     * @return int
     */
    public function numPages()
    {

        $count = ceil($this->numResults() / $this->num_per_page);

        if ($count == 0) {
            return 1;
        }

        return $count;
    }

    /**
     * @return null
     */
    public function numResults()
    {

        if ($this->num_results === null) {

            $options = $this->options([
                'page_limit' => $this->num_per_page, 
                'page_offset' => $this->num_per_page, 
                'full' => null 
            ]);

            $result = $this->resultForPage(1, $options);

            $this->num_results = $result->meta()->totalCount();

        }

        return $this->num_results;
    }

    /**
     * @param array $custom_options
     * @return mixed
     */
    private function options($custom_options = [])
    {

        $options = $this->endpoint->options();
        $options['page_offset'] = $this->pageOffset();

        foreach ($custom_options AS $key => $value) {
            $options[$key] = $value;
        }

        return array_filter($options);
    }

    /**
     * @return int|null
     */
    private function pageOffset()
    {

        if ($this->current_page == null) {
            return null;
        }

        $page = $this->current_page;

        return ($page - 1) * $this->num_per_page;
    }

    /**
     * @param array $custom_options
     * @return mixed
     */
    private function fetchData($custom_options = [])
    {

        $endpoint_class = get_class($this->endpoint);
        $endpoint = new $endpoint_class($this->options($custom_options));

        return $this->api_client->read($endpoint, $this->decoder);

    }

}