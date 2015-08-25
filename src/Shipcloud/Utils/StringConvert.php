<?php
namespace Dannehl\Shipcloud\Utils;

/**
 * Class StringConvert
 *
 * @package Dannehl\Shipcloud\Utils
 */
class StringConvert {


    /**
     * Converts a given string into camelCase style (string_string -> stringString)
     *
     * @param $str
     * @return mixed
     */
    public static function toCamelCase( $str ) {
        return str_replace(' ', '', ucwords(str_replace(array('_', '-'), ' ', $str)));
    }

    /**
     * Converts a camelCase string into under_score string
     *
     * @param $str
     * @return string
     */
    public static function toUnderScore( $str ) {
        return strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', $str));
    }

} 