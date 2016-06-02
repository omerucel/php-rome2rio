<?php

namespace Rome2Rio\Search;

class Api
{
    const VERSION = '1.4';

    /**
     * @var string
     */
    protected $key;

    /**
     * @param string $key
     */
    public function __construct($key)
    {
        $this->key = $key;
    }

    /**
     * @param Query $query
     * @return Response
     */
    public function execute(Query $query)
    {
        return new Response();
    }
}
