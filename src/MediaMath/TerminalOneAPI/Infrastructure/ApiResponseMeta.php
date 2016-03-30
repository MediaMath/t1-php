<?php


namespace MediaMath\TerminalOneAPI\Infrastructure;


class ApiResponseMeta
{

    private $next_page;
    private $etag;
    private $count;
    private $called_on;
    private $status;
    private $offset;
    private $total_count;

    public function __construct($meta = [])
    {

        $keys = get_object_vars($this);

        foreach (array_keys($keys) AS $key) {

            if (isset($meta[$key])) {

                $this->{$key} = $meta[$key];
            }
        }

    }

    public function nextPage()
    {
        return $this->next_page;
    }

    public function eTag()
    {
        return $this->etag;
    }

    public function count()
    {
        return $this->count;
    }

    public function calledOn()
    {
        return $this->called_on;
    }

    public function status()
    {
        return $this->status;
    }

    public function offset()
    {
        return $this->offset;
    }

    public function totalCount()
    {
        return $this->total_count;
    }


}