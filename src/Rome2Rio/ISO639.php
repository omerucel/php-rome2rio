<?php

namespace Rome2Rio;

class ISO639
{
    const CHINESE = 'Chinese';
    const TURKISH = 'Turkish';
    public static $LANGUAGES = array(
        'Chinese' => array('zh', 'zho', 'chi'),
        'Turkish' => array('tr', 'tur', 'tur')
    );

    /**
     * @param $language
     * @return string
     */
    public static function getTwoLetter($language)
    {
        return static::$LANGUAGES[$language][0];
    }

    /**
     * @param $language
     * @return string
     */
    public static function getThreeLetterT($language)
    {
        return static::$LANGUAGES[$language][1];
    }

    /**
     * @param $language
     * @return string
     */
    public static function getThreeLetterB($language)
    {
        return static::$LANGUAGES[$language][2];
    }
}
