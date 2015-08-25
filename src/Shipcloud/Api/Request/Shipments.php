<?php


namespace Dannehl\Shipcloud\Api\Request;


class Shipments extends RequestAbstract {


    /** @var Address  */
    private $_to;

    /** @var Package  */
    private $_package;

    /** @var string  */
    private $_carrier;

    /** @var string  */
    private $_service;

    /** @var string  */
    private $_reference_number;

    /** @var string  */
    private $_notification_email;

    /** @var bool */
    private $_create_shipping_label = false;



    function __construct() {

        $this->resource = 'shipments';
        $this->methods = ['GET', 'POST', 'PUT', 'DELETE'];

    }

    /**
     * @param Address $to
     * @return $this
     */
    public function setTo($to)
    {
        $this->_to = $to;
        return $this;
    }

    /**
     * @param Package $package
     * @return $this
     */
    public function setPackage($package)
    {
        $this->_package = $package;
        return $this;
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
     * @param string $service
     * @return $this
     */
    public function setService($service)
    {
        $this->_service = $service;
        return $this;
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
     * @param string $notification_email
     * @return $this
     */
    public function setNotificationEmail($notification_email)
    {
        $this->_notification_email = $notification_email;
        return $this;
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



    public function payload()
    {

        if (is_a($this->_to,'Dannehl\\Shipcloud\\Api\\Request\\Address')) {
            $this->_to = [
                'company'=> $this->_to->getCompany(),
                'first_name'=> $this->_to->getFirstName(),
                'last_name'=> $this->_to->getLastName(),
                'street'=> $this->_to->getStreet(),
                'street_no'=> $this->_to->getStreetNo(),
                'city'=> $this->_to->getCity(),
                'zip_code'=> $this->_to->getZipCode(),
                'country'=> $this->_to->getCountry(),
            ];
        }

        if (is_a($this->_package,'Dannehl\\Shipcloud\\Api\\Request\\Package')) {
            $this->_package = [
                'weight'=> $this->_package->getWeight(),
                'length'=> $this->_package->getLength(),
                'width'=> $this->_package->getWidth(),
                'height'=> $this->_package->getHeight(),
                'declared_value'=> $this->_package->getDeclaredValue(),
            ];
        }

        return ([
            'to'                => $this->_to,
            'package'           => $this->_package,
            'carrier'           => $this->_carrier,
            'service'           => $this->_service,
            'reference_number'  => $this->_reference_number,
            'notification_email'=> $this->_notification_email,
            'create_shipping_label'=> $this->_create_shipping_label
        ]);
    }
}