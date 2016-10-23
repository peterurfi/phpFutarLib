<?php

// alert-search.json
//
// required: -
// optional: query, start, end
//
// list of current alertIDs
// search by route
// search by stop
// search by start time
// search by end time

class FAlertSearch {

  private $start_date;
  private $end_date;

  function __construct($query, $start, $end) {}

  function listOfAlerts() {}
  function alertsByRoute($route_id) {}
  function alertsByStop($stop_id) {}
  function alertsByStart($start_date){}
  function alertsByEnd($end_date) {}
}
