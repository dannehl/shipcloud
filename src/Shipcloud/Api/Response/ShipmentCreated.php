<?php


namespace Dannehl\Shipcloud\Api\Response;


class ShipmentCreated {

    /** @var string $_id */
    private $_id;

    /** @var string $_carrier_tracking_id */
    private $_carrier_tracking_id;

    /** @var string $_tracking_url */
    private $_tracking_url;

    /** @var string $_label_url */
    private $_label_url;

    /** @var number $_price */
    private $_price;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->_id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCarrierTrackingId()
    {
        return $this->_carrier_tracking_id;
    }

    /**
     * @param string $carrier_tracking_id
     * @return $this
     */
    public function setCarrierTrackingId($carrier_tracking_id)
    {
        $this->_carrier_tracking_id = $carrier_tracking_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingUrl()
    {
        return $this->_tracking_url;
    }

    /**
     * @param string $tracking_url
     * @return $this
     */
    public function setTrackingUrl($tracking_url)
    {
        $this->_tracking_url = $tracking_url;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabelUrl()
    {
        return $this->_label_url;
    }

    /**
     * @param string $label_url
     * @return $this
     */
    public function setLabelUrl($label_url)
    {
        $this->_label_url = $label_url;
        return $this;
    }

    /**
     * @return number
     */
    public function getPrice()
    {
        return $this->_price;
    }

    /**
     * @param number $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->_price = $price;
        return $this;
    }


}