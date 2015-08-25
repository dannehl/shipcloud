<?php


namespace Dannehl\Shipcloud\Api\Request;


class Addresses extends RequestAbstract {

    function __construct() {

        $this->resource = '/addresses';
        $this->methods = ['GET', 'POST'];

    }

}