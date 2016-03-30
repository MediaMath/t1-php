<?php

namespace MediaMath\TerminalOneAPI\Pagination;

use MediaMath\TerminalOneAPI\Infrastructure\ApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\Decodable;

trait Paginator
{

    public function paginate(ApiObject $endpoint, Decodable $decoder = null)
    {

        return new Pagination($endpoint, $decoder, $this);

    }

}