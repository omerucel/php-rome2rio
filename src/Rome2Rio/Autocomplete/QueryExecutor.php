<?php

namespace Rome2Rio\Autocomplete;

class QueryExecutor
{
    /**
     * @var string
     */
    const API_URL = '/api/1.4/json/Autocomplete';

    /**
     * @param Query $query
     * @return Response
     */
    public function execute(Query $query)
    {
        $params = array(
            'key' => $query->getKey(),
            'query' => $query->getQuery()
        );
        if ($query->getCountryCode() != null) {
            $params['countryCode'] = $query->getCountryCode();
        }
        if ($query->getLanguageCode() != null) {
            $params['languageCode'] = $query->getLanguageCode();
        }
        $response = new Response();
        return $response;
    }
}
