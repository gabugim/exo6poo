<?php

class Speedometer
{
    public const KMTOMILES_CONVERSION =  0.6215;
    public const MILESTOKM_CONVERSION = 1.609;
    private $km;
    private $miles;

    public static function convertKmToMiles($km)
    {
        return $km * self::KMTOMILES_CONVERSION;
    }

    public static function convertMilesToKm($miles)
    {
        return $miles * self::MILESTOKM_CONVERSION;
    }
}
