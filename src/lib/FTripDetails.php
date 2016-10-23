<?php

// trip-details.json
//
// required: tripId
// optional: vehicleId, date

class FTripDetails {

    private $alert_ids;
    private $arrival_time;
    private $departure_time;
    private $polyline;
    private $predicted_arrival_time;
    private $predicted_departure_time;
    private $service_date;
    private $stop_headsign;
    private $stop_id;
    private $trip_id;
    private $uncertain;
    private $vehicle_id;

    function __construct() {}
}
