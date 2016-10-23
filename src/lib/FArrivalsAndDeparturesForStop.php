<?php

// arrivals-and-departures-for-stop.json
//
// required: stopId
// optional: onlyDepartures, minutesBefore, minutesAfter

class FArrivalsAndDeparturesForStop {

    private $stop_id;

    function __construct($stop_id, $only_departures, $minutes_before, $minutes_after) {}
}
