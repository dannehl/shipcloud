<?php


namespace Dannehl\Shipcloud\Api\Request;

/**
 * Class Package
 *
 * @package Dannehl\Shipcloud\Api
 */
class Package {

    /** @var number $_width */
    private $_width;

    /** @var number $_height */
    private $_height;

    /** @var number $_length */
    private $_length;

    /** @var number $_weight */
    private $_weight;

    /** @var DeclaredValue $_declared_value */
    private $_declared_value;

    /** @var string $_package_type */
    private $_package_type;

    /**
     * @return number
     */
    public function getWidth()
    {
        return $this->_width;
    }

    /**
     * @param number $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->_width = $width;
        return $this;
    }

    /**
     * @return number
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * @param number $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->_height = $height;
        return $this;
    }

    /**
     * @return number
     */
    public function getLength()
    {
        return $this->_length;
    }

    /**
     * @param number $length
     * @return $this
     */
    public function setLength($length)
    {
        $this->_length = $length;
        return $this;
    }

    /**
     * @return number
     */
    public function getWeight()
    {
        return $this->_weight;
    }

    /**
     * @param number $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->_weight = $weight;
        return $this;
    }

    /**
     * @return DeclaredValue
     */
    public function getDeclaredValue()
    {
        return $this->_declared_value;
    }

    /**
     * @param DeclaredValue $declared_value
     * @return $this
     */
    public function setDeclaredValue($declared_value)
    {
        $this->_declared_value = $declared_value;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageType()
    {
        return $this->_package_type;
    }

    /**
     * @param string $package_type
     * @return $this
     */
    public function setPackageType($package_type)
    {
        $this->_package_type = $package_type;
        return $this;
    }





}