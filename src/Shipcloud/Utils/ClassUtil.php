<?php
namespace Dannehl\Shipcloud\Utils;


/**
 * Class ClassUtil
 *
 * @package Dannehl\Shipcloud\Utils
 */
class ClassUtil {


    /**
     * @param      $string
     * @param bool $ns
     * @return string
     * @deprecated use ClassUtil::className() instead
     */
    public static function classModel($string, $ns = false) {

        if (!$ns) {
            $ns = substr(__NAMESPACE__,0,-5). 'Api';
        }

        $clazz = $ns . '\\' . ucfirst($string);
        return $clazz;

    }

    /**
     * @param      $clazz
     * @param bool $silent
     * @return mixed
     * @throws \Exception
     */
    public static function className( $clazz , $silent = true) {

        $clazz = StringConvert::toCamelCase($clazz);

        $clazz = 'Dannehl\\Shipcloud\\Api\\Response\\' . ucfirst($clazz);
        if (class_exists($clazz)) {
            return new $clazz;
        } else {
            if (!$silent) {
                throw new \Exception('Class model of name '.$clazz.' does not exists');
            }
        }
        return null;
    }


    /**
     * @param $clazz
     * @return string
     */
    public static function reflectName( $clazz ) {
        $function = new \ReflectionClass($clazz);
        return $function->getShortName();
    }
} 