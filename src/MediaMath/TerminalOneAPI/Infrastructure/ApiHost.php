<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

/**
 * Class ApiHost
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
final class ApiHost
{
    /**
     * @deprecated
     *
     * use function getHost() instead of using constants
     */
    const T1_AUTHENTICATION = 'https://api.mediamath.com/api/v2.0/';
    const T1_MANAGEMENT = 'https://api.mediamath.com/api/v2.0/';
    const T1_VIDEO = 'https://api.mediamath.com/video/v1/';
    const T1_REPORTING = 'https://api.mediamath.com/reporting/v1/std/';
    const T1_ADAPTIVE_SEGMENTS = 'https://t1.mediamath.com/dmp/v2.0/';

    /**
     * Get host by type
     *
     * @param $type
     * @param null $subdomain
     * @param null $version
     * @return string
     */
    public static function getHost($type, $subdomain = null, $version = null)
    {
        switch (strtoupper($type)) {
            case 'T1_AUTHENTICATION':
                $host = 'https://'.self::overrideDefaultValue('api', $subdomain).'.mediamath.com/api/v'.self::overrideDefaultValue('2.0', $version).'/';
                break;
            case 'T1_MANAGEMENT':
                $host = 'https://'.self::overrideDefaultValue('api', $subdomain).'.mediamath.com/api/v'.self::overrideDefaultValue('2.0', $version).'/';
                break;
            case 'T1_VIDEO':
                $host = 'https://'.self::overrideDefaultValue('api', $subdomain).'.mediamath.com/video/v'.self::overrideDefaultValue('1', $version).'/';
                break;
            case 'T1_REPORTING':
                $host = 'https://'.self::overrideDefaultValue('api', $subdomain).'.mediamath.com/reporting/v'.self::overrideDefaultValue('1', $version).'/std/';
                break;
            case 'T1_ADAPTIVE_SEGMENTS':
                $host = 'https://'.self::overrideDefaultValue('t1', $subdomain).'.mediamath.com/dmp/v'.self::overrideDefaultValue('2.0', $version).'/';
                break;
            case 'T1_MEDIA':
                $host = 'https://'.self::overrideDefaultValue('t1', $subdomain).'.mediamath.com/media/v'.self::overrideDefaultValue('1.0', $version).'/';
                break;
        }

        return $host;
    }

    /**
     * Override default value
     *
     * @param $defaultValue
     * @param $newValue
     * @return string
     */
    private static function overrideDefaultValue($defaultValue, $newValue)
    {
        if($newValue){
            $defaultValue = $newValue;
        }
        return $defaultValue;
    }
}