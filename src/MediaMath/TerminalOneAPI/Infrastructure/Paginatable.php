<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

/**
 * Interface Paginatable
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
interface Paginatable
{

    /**
     * @param $page_number
     * @return mixed
     */
    public function page($page_number);

    /**
     * @return mixed
     */
    public function previous();

    /**
     * @return mixed
     */
    public function next();

    /**
     * @return mixed
     */
    public function first();

    /**
     * @return mixed
     */
    public function last();

    /**
     * @return mixed
     */
    public function numPages();

    /**
     * @return mixed
     */
    public function numResults();

}

