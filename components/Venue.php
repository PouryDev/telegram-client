<?php

namespace PK\components;
/**
 * Class Venue
 * @package PK\components
 * @property Location location
 */
class Venue
{
    public object $location;
    public string $address,
        $foursquare_id,
        $foursquare_type,
        $google_place_id,
        $google_place_type,
        $title;
}