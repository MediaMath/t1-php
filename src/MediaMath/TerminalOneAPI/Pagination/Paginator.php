<?php

namespace MediaMath\TerminalOneAPI\Pagination;

use MediaMath\TerminalOneAPI\Infrastructure\ApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\Decodable;

/**
 * Class Paginator
 * @package MediaMath\TerminalOneAPI\Pagination
 */
trait Paginator
{

    /**
     * @param ApiObject $endpoint
     * @param Decodable|null $decoder
     * @return Pagination
     */
    public function paginate(ApiObject $endpoint, Decodable $decoder = null)
    {

        $decoder = $decoder ?: $this->decoder;

        return new Pagination($endpoint, $decoder, $this);

    }

}
