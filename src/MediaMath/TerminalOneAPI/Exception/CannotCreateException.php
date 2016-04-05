<?php

namespace MediaMath\TerminalOneAPI\Exception;

/**
 * Class CannotCreateException
 * @package MediaMath\TerminalOneAPI\Exception
 */
class CannotCreateException extends \Exception
{
    /**
     * CannotCreateException constructor.
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}