<?php

namespace MediaMath\TerminalOneAPI\Exception;

/**
 * Class CannotUpdateException
 * @package MediaMath\TerminalOneAPI\Exception
 */
class CannotUpdateException extends \Exception
{
    /**
     * CannotUpdateException constructor.
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}