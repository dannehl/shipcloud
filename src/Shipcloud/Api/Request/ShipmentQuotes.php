<?php


namespace Dannehl\Shipcloud\Api\Request;


class ShipmentQuotes extends RequestAbstract {

    function __construct() {

        $this->resource = '/shipment_quotes';
        $this->methods = ['GET'];

    }

}