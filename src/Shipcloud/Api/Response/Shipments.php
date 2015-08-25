<?php


namespace Dannehl\Shipcloud\Api\Response;


class Shipments {

    /** @var To  */
    private $_to;

    /** @var Packages  */
    private $_packages;

    /** @var string  */
    private $_carrier;

    /** @var string  */
    private $_service;

    /** @var string  */
    private $_reference_number;

    /** @var string  */
    private $_notification_email;

    /** @var bool */
    private $_create_shipping_label;

    /**
     * @return To
     */
    public function getTo()
    {
        return $this->_to;
    }

    /**
     * @param To $to
     * @return $this
     */
    public function setTo($to)
    {
        $this->_to = $to;
        return $this;
    }

    /**
     * @return Packages
     */
    public function getPackages()
    {
        return $this->_packages;
    }

    /**
     * @param Packages $packages
     * @return $this
     */
    public function setPackages($packages)
    {
        $this->_packages = $packages;
        return $this;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
        return $this->_carrier;
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
     * @return string
     */
    public function getService()
    {
        return $this->_service;
    }

    /**
     * @param string $service
     * @return $this
     */
    public function setService($service)
    {
        $this->_service = $service;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->_reference_number;
    }

    /**
     * @param string $reference_number
     * @return $this
     */
    public function setReferenceNumber($reference_number)
    {
        $this->_reference_number = $reference_number;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotificationEmail()
    {
        return $this->_notification_email;
    }

    /**
     * @param string $notification_email
     * @return $this
     */
    public function setNotificationEmail($notification_email)
    {
        $this->_notification_email = $notification_email;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isCreateShippingLabel()
    {
        return $this->_create_shipping_label;
    }

    /**
     * @param boolean $create_shipping_label
     * @return $this
     */
    public function setCreateShippingLabel($create_shipping_label)
    {
        $this->_create_shipping_label = $create_shipping_label;
        return $this;
    }



}