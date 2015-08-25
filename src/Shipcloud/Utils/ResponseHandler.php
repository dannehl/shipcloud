<?php
namespace Dannehl\Shipcloud\Utils;


/**
 * Class ResponseHandler
 *
 * @package Dannehl\Shipcloud\Utils
 */
class ResponseHandler {



    public function handle( $method, $resource, $responseBody ) {


        $model = $this->_getResponseModel($resource,$method);
        $data = json_decode($responseBody, true);


        if (ArrayUtil::isNumericArray($data)) {
            foreach($data as $item) {
                $arr[] = $this->buildObject($model,$item);
            }
            return isset($arr) ? $arr : [];

        } else {
            return $this->buildObject($model,$data);
        }

    }


    private function _getResponseModel( $resource, $method ) {

        switch($resource) {
            case 'addresses':

                break;
            case 'shipments':
                if ($method == 'create' || $method == 'update') {
                    $model = 'ShipmentCreated';
                }
                if ($method == 'getAll' || $method == 'getOne') {
                    $model = 'Shipments';
                }
                break;
            case 'shipment_quotes':

                break;

            case 'carriers':
                $model = 'Carriers';
                break;

            case 'pickup_requests':

                break;
        }

        return isset($model) ? $model : null;
    }


    private function buildObject( $clazz, $data ) {

        $cz = ClassUtil::className($clazz, false);

        foreach ( $data as $k => $v ) {

            if ( ArrayUtil::isAssocArray($v) ) {
                $this->addProperty( $cz, $k, $this->buildObject($k,$v));

            } elseif( ArrayUtil::isNumericArray($v)) {
                foreach($v as $nv) {
                    if ( ArrayUtil::isAssocArray($v) ) {
                        $this->addProperty( $cz, $k, $this->buildObject($k,$nv));
                    } else {
                        $this->addProperty( $cz, $k, $this->buildObject($k,$nv));
                    }
                }

            }else {
                $this->addProperty( $cz, $k, $v);
            }
        }
        return $cz;
    }


    private function addProperty( $cz,  $k, $v ) {

        $method = $this->setMethod( $k );
        if ( method_exists($cz,$method)) {
            return $cz->{$method}($v);
        }
        return null;
    }


    /**
     * @param $k
     * @return string
     */
    private function setMethod( $k ) {
        $prefix = 'set';
        $method = $prefix.StringConvert::toCamelCase($k);
        return $method;
    }


} 