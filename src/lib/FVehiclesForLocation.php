<?php

// vehicles-for-location.json
//
// required: lon, lat
// optional: lonSpan, latSpan, radius, query

class FVehiclesForLocation {

  private $vehicle_id;
  private $stop_id;
  private $route_id;
  private $bearing;
  private $location;
  private $service_date;
  private $license_plate;
  private $label;
  private $deviated;
  private $last_update_time;
  private $status;
  private $congestion_level;
  private $vehicle_route_type;
  private $stop_distance_percent;
  private $trip_id;

  private $lat;
  private $lon;
  private $lat_span;
  private $lon_span;
  private $radius;
  private $query;

  function __construct(
                $lat      = 47.501,
                $lon      = 19.053,
                $lat_span = 0.0,
                $lon_span = 0.0,
                $radius   = 0.0,
                $query    = ""
                ) {}
}
