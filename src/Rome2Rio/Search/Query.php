<?php

namespace Rome2Rio\Search;

class Query
{
    /**
     * @var Place
     */
    protected $origin;

    /**
     * @var Place
     */
    protected $destination;

    /**
     * @var string
     */
    protected $currencyCode = null;

    /**
     * @var string
     */
    protected $languageCode = null;

    /**
     * @var string
     */
    protected $data = null;

    /**
     * @var array
     */
    protected $excludeFlags = array();

    /**
     * @return Place
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param $origin
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * @return Place
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param $destination
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param $currencyCode
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * @param $languageCode
     * @return $this
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param $flag
     * @return $this
     */
    public function setExcludeFlag($flag)
    {
        $this->excludeFlags[$flag] = true;
        return $this;
    }

    /**
     * @return array
     */
    public function getExcludeFlags()
    {
        return $this->excludeFlags;
    }
}
