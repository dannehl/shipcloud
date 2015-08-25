<?php
namespace Dannehl\Shipcloud\Utils;

/**
 * Class ArrayUtil
 *
 * @package Dannehl\Shipcloud\Utils
 */
class ArrayUtil {

    /**
     * Check if array is associative
     *
     * @param array $arr
     * @return bool
     */
    public static function isAssocArray($arr) {
        if ( !is_array($arr) ) { return false; }
        foreach ($arr as $k => $v) {
            if (is_int($k)) {
                return false;
            }
        }
        return true;
    }

    /**
     * Check if array is numeric
     *
     * @param array $arr
     * @return bool
     */
    public static function isNumericArray($arr) {
        if ( !is_array($arr) ) { return false; }
        foreach ($arr as $k => $v) {
            if (is_int($k)) {
                return true;
            }
        }
        return false;
    }
} 