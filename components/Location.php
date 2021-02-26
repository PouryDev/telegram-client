<?php

namespace PK\components;

class Location
{
    public float $latitude,
        $longitude;
    /**
     * @var mixed
     */
    public $horizontal_accuracy;
    public int $proximity_alert_radius,
        $heading,
        $live_period;
}