<?php

namespace Dannehl\Shipcloud\Api\Response;

/**
 * Class Carriers
 *
 * @package Dannehl\Shipcloud\Api\Response
 */
class Carriers  {

    private $_name;

    private $_display_name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     * @return $this
     */
    public function setName($name)
    {
        $this->_name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDisplayName()
    {
        return $this->_display_name;
    }

    /**
     * @param mixed $display_name
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->_display_name = $display_name;
        return $this;
    }
}