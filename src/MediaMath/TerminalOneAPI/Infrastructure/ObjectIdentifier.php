<?php


namespace MediaMath\TerminalOneAPI\Infrastructure;


class ObjectIdentifier
{

    public static function identify($object)
    {


        $refl = new \ReflectionObject($object);

        $properties = $refl->getProperties();

        $tmp = [];

        foreach ($properties AS $property) {
            $property->setAccessible(true);
            $tmp[$property->getName()] = $property->getValue($object);
        }

        return crc32(json_encode($tmp));

    }

}