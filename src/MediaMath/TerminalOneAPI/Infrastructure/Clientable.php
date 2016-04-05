<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

/**
 * Interface Clientable
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
interface Clientable
{

    /**
     * @param ApiObject $endpoint
     * @param Decodable $decoder
     * @return mixed
     */
    public function create(ApiObject $endpoint, Decodable $decoder);

    /**
     * @param ApiObject $endpoint
     * @param Decodable $decoder
     * @return mixed
     */
    public function read(ApiObject $endpoint, Decodable $decoder);

    /**
     * @param ApiObject $endpoint
     * @param Decodable $decoder
     * @return mixed
     */
    public function update(ApiObject $endpoint, Decodable $decoder);

}