<?php


namespace Dannehl\Shipcloud;


use Dannehl\Shipcloud\Api\Request\Carriers;
use Dannehl\Shipcloud\Api\Request\PickupRequests;
use Dannehl\Shipcloud\Api\Request\Shipments;

class Shipcloud {




    public static function addresses() {

    }

    public static function shipments() {
        return new Shipments();
    }

    public static function shipmentQuote( $id ) {

    }


    public static function carriers() {
        return new Carriers();
    }


    public static function pickupRequest() {
        return new PickupRequests();
    }
}