<?php

namespace Rome2Rio\Search;

interface PlaceKind
{
    const UNKNOWN = 'unknown';
    const CONTINENT = 'continent';
    const COUNTRY = 'country';
    const ADMIN3 = 'admin3';
    const ADMIN2 = 'admin2';
    const ADMIN1 = 'admin1';
    const ISLAND = 'island';
    const VILLAGE = 'village';
    const TOWN = 'town';
    const CITY = 'city';
    const CAPITAL = 'capital';
    const LANDMARK = 'landmark';
    const PLACE = 'place';
    const ROAD = 'road';
    const ACCOMODATION = 'accomodation';
    const STATION = 'station';
    const AIRPORT = 'airport';
    const SEAPORT = 'seaport';
    const SEA = 'sea';
    const LAKE = 'lake';
    const RIVER = 'river';
}
