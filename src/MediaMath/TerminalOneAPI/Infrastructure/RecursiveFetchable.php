<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

/**
 * Interface RecursiveFetchable
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
interface RecursiveFetchable
{

    /**
     * RecursiveFetchable constructor.
     * @param Decodable $decoder
     */
    public function __construct(Decodable $decoder);

    /**
     * @param Transportable $transport
     * @param ApiObject $endpoint
     * @return mixed
     */
    public function fetch(Transportable $transport, ApiObject $endpoint);

}