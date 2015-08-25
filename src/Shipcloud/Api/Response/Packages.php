<?php


namespace Dannehl\Shipcloud\Api\Response;

/**
 * Class Package
 *
 * @package Dannehl\Shipcloud\Api
 */
class Packages {

    /** @var   */
    private $_id;

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
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     * @return $this
     */
    public function setId($id)
    {
        $this->_id = $id;
        return $this;
    }

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


}