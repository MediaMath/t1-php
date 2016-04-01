<?php


namespace MediaMath\TerminalOneAPI\Infrastructure;


class HttpResponseHeaders
{

    private $cache_control;
    private $content_type;
    private $date;
    private $expires;
    private $last_modified;
    private $server;
    private $vary;
    private $x_catalyst;
    private $x_mashery_responder;
    private $transfer_encoding;
    private $connection;


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
    public function cacheControl()
    {
        return $this->cache_control;
    }

    /**
     * @return mixed
     */
    public function contentType()
    {
        return $this->content_type;
    }

    /**
     * @return mixed
     */
    public function date()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function expires()
    {
        return $this->expires;
    }

    /**
     * @return mixed
     */
    public function lastModified()
    {
        return $this->last_modified;
    }

    /**
     * @return mixed
     */
    public function server()
    {
        return $this->server;
    }

    /**
     * @return mixed
     */
    public function vary()
    {
        return $this->vary;
    }

    /**
     * @return mixed
     */
    public function xCatalyst()
    {
        return $this->x_catalyst;
    }

    /**
     * @return mixed
     */
    public function xMasheryResponder()
    {
        return $this->x_mashery_responder;
    }

    /**
     * @return mixed
     */
    public function transferEncoding()
    {
        return $this->transfer_encoding;
    }

    /**
     * @return mixed
     */
    public function connection()
    {
        return $this->connection;
    }


}