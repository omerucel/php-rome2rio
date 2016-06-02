<?php

namespace Rome2Rio\Search;

class Place
{
    /**
     * @var float
     */
    protected $lat;

    /**
     * @var float
     */
    protected $lng;

    /**
     * @var string
     */
    protected $kind;

    /**
     * @var string
     */
    protected $shortName;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $regionCode;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var string
     */
    protected $timeZone;

    /**
     * @param $name
     * @param string $kind
     * @return Place
     */
    public static function createWithName($name, $kind = PlaceKind::UNKNOWN)
    {
        $place = new Place();
        $place->setShortName($name)
            ->setKind($kind);
        return $place;
    }

    /**
     * @param $lat
     * @param $lng
     * @param string $kind
     * @return Place
     */
    public static function createWithLocation($lat, $lng, $kind = PlaceKind::UNKNOWN)
    {
        $place = new Place();
        $place->setLat($lat)
            ->setLng($lng)
            ->setKind($kind);
        return $place;
    }

    /**
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param $lat
     * @return $this
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
        return $this;
    }

    /**
     * @return float
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * @param $lng
     * @return $this
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
        return $this;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param $kind
     * @return $this
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * @param $shortName
     * @return $this
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegionCode()
    {
        return $this->regionCode;
    }

    /**
     * @param $regionCode
     * @return $this
     */
    public function setRegionCode($regionCode)
    {
        $this->regionCode = $regionCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @param $timeZone
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
        return $this;
    }
}
