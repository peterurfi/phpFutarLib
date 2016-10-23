<?php

// vehicles-for-route.json
//
// required: routeId
// optional: related

class FVehiclesForRoute {

    private $congestion_level;
    private $deviated;
    private $label;
    private $last_update_time;
    private $license_plate;
    private $location;
    private $route_id;
    private $service_date;
    private $status;
    private $stop_distance_percent;
    private $stop_id;
    private $trip_id;
    private $vehicle_id;
    private $vehicle_route_type;

    function __construct() {}
    function getDockingStations() {}
    function getDockingStationsByCoordinates() {}

}
