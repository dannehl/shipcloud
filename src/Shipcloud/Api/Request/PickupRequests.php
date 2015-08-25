<?php


namespace Dannehl\Shipcloud\Api\Request;


class PickupRequests extends RequestAbstract{

    /** @var string $_carrier */
    private $_carrier;

    /** @var string $_pickup_date */
    private $_pickup_date;

    /** @var array */
    private $_shipments = [];


    function __construct() {

        $this->resource = '/v1/pickup_requests';
        $this->methods = ['POST'];
    }

    /**
     * @param string $carrier
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->_carrier = $carrier;
        return $this;
    }

    /**
     * @param string $pickup_date
     * @return $this
     */
    public function setPickupDate($pickup_date)
    {
        $this->_pickup_date = $pickup_date;
        return $this;
    }

    /**
     * @param array $shipments
     * @return $this
     */
    public function addShipment($shipments)
    {
        $this->_shipments[] = $shipments;
        return $this;
    }


    public function toJson() {

        return json_encode([
            'carrier'       => $this->_carrier,
            'pickup_date'   => $this->_pickup_date,
            'shipments'     => $this->_shipments
        ]);

    }

}