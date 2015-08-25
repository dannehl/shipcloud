<?php


namespace Dannehl\Shipcloud\Api\Request;


class Carriers extends RequestAbstract{


    function __construct() {

        $this->resource = 'carriers';
        $this->methods = ['GET'];

    }

    public function payload()
    {
        return [];
    }
}