<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

interface Paginatable
{

    public function page($page_number);

    public function previous();

    public function next();

    public function first();

    public function last();

    public function numPages();

    public function numResults();

}

