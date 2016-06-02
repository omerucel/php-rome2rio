<?php

namespace Rome2Rio\Autocomplete;

class Query
{
    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $query;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var string
     */
    protected $languageCode;

    /**
     * @return Query
     */
    public static function newQuery()
    {
        return new Query();
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param $query
     * @return $this
     */
    public function setQuery($query)
    {
        $this->query = $query;
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
     * @return Response
     */
    public function execute()
    {
        $executor = new QueryExecutor();
        return $executor->execute($this);
    }
}
