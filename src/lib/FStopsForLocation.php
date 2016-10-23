<?php

// stops-for-location.json
//
// required: lon, lat
// optional: lonSpan, latSpan, radius, query

class FStopsForLocation {

  private $code;
  private $direction;
  private $id;
  private $lat;
  private $location_type;
  private $lon;
  private $name;
  private $parent_station_id;
  private $route_ids;
  private $stop_color_type;
  private $type;
  private $wheelchair_boarding;

  function __construct($lon, $lat) {}

}
