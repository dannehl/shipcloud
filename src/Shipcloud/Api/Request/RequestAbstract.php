<?php
namespace Dannehl\Shipcloud\Api\Request;



abstract class RequestAbstract {

    protected $id;

    protected $resource;

    protected $queryString = [];

    protected $methods;


    public final function getRequestService() {
        return [
            '_resource' => $this->resource,
            '_methods'  => $this->methods,
            '_query'    => $this->queryString
        ];
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }



    public abstract function payload();
}