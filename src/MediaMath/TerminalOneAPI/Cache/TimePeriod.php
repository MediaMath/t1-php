<?php

namespace MediaMath\TerminalOneAPI\Cache;

/**
 * Class TimePeriod
 * @package MediaMath\TerminalOneAPI\Cache
 */
final class TimePeriod
{

    /**
     * @var
     */
    private $seconds;

    /**
     * TimePeriod constructor.
     * @param $seconds
     */
    private function __construct($seconds)
    {
        $this->seconds = $seconds;
    }

    /**
     * @param $hours
     * @return static
     */
    public static function hours($hours)
    {
        return new static($hours * 60 * 60);
    }

    /**
     * @param $minutes
     * @return static
     */
    public static function minutes($minutes)
    {
        return new static($minutes * 60);
    }

    /**
     * @param $seconds
     * @return static
     */
    public static function seconds($seconds)
    {
        return new static($seconds);
    }

    /**
     * @return mixed
     */
    public function inSeconds()
    {
        return $this->seconds;
    }

}