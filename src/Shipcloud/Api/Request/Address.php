<?php


namespace Dannehl\Shipcloud\Api\Request;

/**
 * Class Address
 *
 * @package Dannehl\Shipcloud\Api\Request
 */
class Address {

    /** @var string $_company */
    private $_company;

    /** @var string $_first_name */
    private $_first_name;

    /** @var string $_last_name */
    private $_last_name;

    /** @var string $_care_of */
    private $_care_of;

    /** @var string $_street */
    private $_street;

    /** @var string $_street_no */
    private $_street_no;

    /** @var string $_city */
    private $_city;

    /** @var string $_zip_code */
    private $_zip_code;

    /** @var string $_country Country as uppercase ISO 3166-1 alpha-2 code */
    private $_country;

    /** @var string $_phone */
    private $_phone;

    /**
     * @return string
     */
    public function getCompany()
    {
        return (string) $this->_company;
    }

    /**
     * @param string $company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->_company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return (string) $this->_first_name;
    }

    /**
     * @param string $first_name
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->_first_name = $first_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return (string) $this->_last_name;
    }

    /**
     * @param string $last_name
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->_last_name = $last_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCareOf()
    {
        return (string) $this->_care_of;
    }

    /**
     * @param string $care_of
     * @return $this
     */
    public function setCareOf($care_of)
    {
        $this->_care_of = $care_of;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return (string) $this->_street;
    }

    /**
     * @param string $street
     * @return $this
     */
    public function setStreet($street)
    {
        $this->_street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetNo()
    {
        return (string) $this->_street_no;
    }

    /**
     * @param string $street_no
     * @return $this
     */
    public function setStreetNo($street_no)
    {
        $this->_street_no = $street_no;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return (string) $this->_city;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->_city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return (string) $this->_zip_code;
    }

    /**
     * @param string $zip_code
     * @return $this
     */
    public function setZipCode($zip_code)
    {
        $this->_zip_code = $zip_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return (string) $this->_country;
    }

    /**
     * @param string $country
     * @return $this
     * @description Country as uppercase ISO 3166-1 alpha-2 code
     */
    public function setCountry($country)
    {
        $this->_country = strtoupper($country);
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return (string) $this->_phone;
    }

    /**
     * @param string $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
        return $this;
    }


}