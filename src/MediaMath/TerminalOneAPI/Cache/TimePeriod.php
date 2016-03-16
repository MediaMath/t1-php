<?php

namespace MediaMath\TerminalOneAPI\Cache;

final class TimePeriod
{

    private $seconds;

    private function __construct($seconds)
    {
        $this->seconds = $seconds;
    }

    public static function hours($hours)
    {
        return new static($hours * 60 * 60);
    }

    public static function minutes($minutes)
    {
        return new static($minutes * 60);
    }

    public static function seconds($seconds)
    {
        return new static($seconds);
    }

    public function inSeconds()
    {
        return $this->seconds;
    }

}