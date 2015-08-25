<?php
namespace Dannehl\Shipcloud\Config;

/**
 * Class SdkConfig
 *
 * @package Dannehl\Shipcloud\Config
 */
class SdkConfig {

    /** @var array $cfg */
    private static $cfg = array();


    /**
     * @param bool $file
     */
    function __construct( $file = false ) {
        $_default = dirname(dirname(__FILE__)) . '/config.ini';
        if ($file) {
            if (file_exists( $file )) {
                $_ini = parse_ini_file( $file );
            } else {
                $_ini = parse_ini_file( $_default );
            }
        } else {
            $_ini = parse_ini_file( $_default );
        }

        foreach( $_ini as $k => $v ) {
            self::_add( $k, $v );
        }
    }

    /**
     * @param $key
     * @param $value
     */
    private static function _add( $key, $value ) {
        self::$cfg[$key] = $value;
    }

    /**
     * @param $key
     * @return mixed
     */
    private static function _get( $key ) {
        return self::$cfg[$key];
    }

    /**
     * @return string The API-Endpoint
     * @throws \Exception
     */
    public static function getEndpoint() {
        switch( self::_get('mode') ) {
            case 'sandbox':
                return SdkConstants::SANDBOX_ENDPOINT . SdkConstants::API_VERSION;
                break;
            case 'production':
                return SdkConstants::PRODUCTION_ENDPOINT . SdkConstants::API_VERSION;
                break;
            default:
                throw new \Exception('Invalid Mode. Please check your config-file.');
        }
    }

}