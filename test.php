<?php

$searchApi = new \Rome2Rio\Search\Api('APIKEY');
$query = new \Rome2Rio\Search\Query();
$query->setOrigin(\Rome2Rio\Search\Place::createWithName('Suzhou', \Rome2Rio\Search\PlaceKind::CITY))
    ->setDestination(\Rome2Rio\Search\Place::createWithName('Beijing', \Rome2Rio\Search\PlaceKind::CITY))
    ->setExcludeFlag(\Rome2Rio\Search\ExcludeFlag::NO_BIKESHARE);
$response = $searchApi->execute($query);

$response = \Rome2Rio\Autocomplete\Query::newQuery()
    ->setKey('APIKEY')
    ->setQuery('suzhou')
    ->setCountryCode(\Rome2Rio\ISO3166::getTwoLetter(\Rome2Rio\ISO3166::TURKEY))
    ->setLanguageCode(\Rome2Rio\ISO639::getTwoLetter(Rome2Rio\ISO639::TURKISH))
    ->execute();