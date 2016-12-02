<?php
/**
 * Created by PhpStorm.
 * User: mbucse
 * Date: 02/12/2016
 * Time: 15:54
 */

namespace MediaMath\TerminalOneAPI\Exception;


class UnknownContentTypeException extends \Exception
{
    public function __construct($message, $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}