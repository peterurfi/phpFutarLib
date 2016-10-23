<?php

// vehicles-for-stop.json
//
// required: stopId
// optional:

class FVehiclesForStop {

  private $bearing;
  private $congestion_level;
  private $deviate;
  private $license_plate;
  private $label;
  private $last_update_time;
  private $location;
  private $route_id;
  private $service_date;
  private $status;
  private $stop_distance_percent;
  private $stop_id;
  private $trip_id;
  private $vehicle_id;
  private $vehicle_route_type;

  function __construct($stop_id) {}
    
}
