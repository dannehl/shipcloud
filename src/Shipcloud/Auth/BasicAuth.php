<?php
namespace Dannehl\Shipcloud\Auth;
use Dannehl\Shipcloud\Config\SdkConfig;


/**
 * Class BasicAuth
 *
 * @package Dannehl\Shipcloud\Auth
 * TODO: we need a complete rework of this...
 */
class BasicAuth {

    /** @var string  */
    private $_key;

    /**
     * @param $_key
     */
    function __construct($_key) {
        new SdkConfig();
        $this->_key = $_key;
    }

    /**
     * @return mixed
     */
    public function getKey() {
        return $this->_key;
    }




} 