<?php

namespace Rome2Rio;

class ISO3166
{
    const CHINA = 'China';
    const TURKEY = 'Turkey';
    public static $CODES = array(
        'China' => array('CN', 'CHN', 156),
        'Turkey' => array('TR', 'TUR', 792)
    );

    /**
     * @param $country
     * @return string
     */
    public static function getTwoLetter($country)
    {
        return static::$CODES[$country][0];
    }

    /**
     * @param $country
     * @return string
     */
    public static function getThreeLetter($country)
    {
        return static::$CODES[$country][1];
    }

    /**
     * @param $country
     * @return int
     */
    public static function getThreeDigit($country)
    {
        return static::$CODES[$country][2];
    }
}
