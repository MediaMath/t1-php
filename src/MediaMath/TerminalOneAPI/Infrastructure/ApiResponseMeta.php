<?php


namespace MediaMath\TerminalOneAPI\Infrastructure;


/**
 * Class ApiResponseMeta
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
class ApiResponseMeta
{

    /**
     * @var
     */
    private $next_page;
    
    /**
     * @var
     */
    private $etag;

    /**
     * @var
     */
    private $count;

    /**
     * @var
     */
    private $called_on;

    /**
     * @var
     */
    private $status;

    /**
     * @var
     */
    private $offset;

    /**
     * @var
     */
    private $total_count;

    /**
     * @var
     */
    private $http_code;

    /**
     * ApiResponseMeta constructor.
     * @param array $meta
     */
    public function __construct($meta = [])
    {

        $keys = get_object_vars($this);

        foreach (array_keys($keys) AS $key) {

            if (isset($meta[$key])) {

                $this->{$key} = $meta[$key];
            }
        }

    }

    /**
     * @return mixed
     */
    public function nextPage()
    {
        return $this->next_page;
    }

    /**
     * @return mixed
     */
    public function eTag()
    {
        return $this->etag;
    }

    /**
     * @return mixed
     */
    public function count()
    {
        return $this->count;
    }

    /**
     * @return mixed
     */
    public function calledOn()
    {
        return $this->called_on;
    }

    /**
     * @return mixed
     */
    public function status()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function offset()
    {
        return $this->offset;
    }

    /**
     * @return mixed
     */
    public function totalCount()
    {
        return $this->total_count;
    }

    /**
     * @return mixed
     */
    public function httpCode() {
        return $this->http_code;
    }


}