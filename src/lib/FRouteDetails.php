<?php

// route-details.json
//
// required: routeId
// optional: related

class FRouteDetails {

    private $agency_id;
    private $alert_ids;
    private $bikes_allowed;
    private $color;
    private $description;
    private $id;
    private $long_name;
    private $related;
    private $route_id;
    private $short_name;
    private $text_color;
    private $type;
    private $url;
    private $variants;

    function __construct($route_id, $related=false) {}

}
