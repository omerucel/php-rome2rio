<?php

namespace Rome2Rio\Search;

interface ExcludeFlag
{
    const NO_AIR = 'noAir';
    const NO_AIR_LEG = 'noAirLeg';
    const NO_RAIL = 'noRail';
    const NO_BUS = 'noBus';
    const NO_FERRY = 'noFerry';
    const NO_CAR = 'noCar';
    const NO_BIKESHARE = 'noBikeshare';
    const NO_RIDESHARE = 'noRideshare';
    const NO_TOWNCAR = 'noTowncar';
    const NO_COMMUTER = 'noCommuter';
    const NO_SPECIAL = 'noSpecial';
    const NO_MINOR_STAR = 'noMinorStart';
    const NO_MINOR_END = 'noMinorEnd';
    const NO_PATH = 'noPath';
    const NO_PRICE = 'noPrice';
    const NO_STOP = 'noPrice';
}
