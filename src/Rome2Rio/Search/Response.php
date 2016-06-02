<?php

namespace Rome2Rio\Search;

class Response
{
    /**
     * @var string
     */
    protected $elapsedTime;

    /**
     * @var string
     */
    protected $currencyCode;

    /**
     * @var string
     */
    protected $languageCode;

    /**
     * @var string
     */
    protected $data;

    /**
     * @var array
     */
    protected $places = array();

    /**
     * @var array
     */
    protected $airlines = array();

    /**
     * @var array
     */
    protected $aircrafts = array();

    /**
     * @var array
     */
    protected $agencies = array();

    /**
     * @var array
     */
    protected $vehicles = array();

    /**
     * @var array
     */
    protected $routes = array();

    public function addRoute(Route $route)
    {
        $this->routes[] = $route;
    }

    /**
     * @return array
     */
    public function getRoutes()
    {
        return $this->routes;
    }
}
