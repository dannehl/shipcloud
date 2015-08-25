<?php

namespace Dannehl\Shipcloud;

use Dannehl\Shipcloud\Api\Request\RequestAbstract;
use Dannehl\Shipcloud\Auth\BasicAuth;
use Dannehl\Shipcloud\Http\HttpClient;
use Dannehl\Shipcloud\Utils\ResponseHandler;
use GuzzleHttp\Exception\RequestException;


class Request {

    private $_model;

    /** @var  BasicAuth */
    private $_httpClient;

    function __construct( BasicAuth $auth ) {
        $this->_httpClient = new HttpClient($auth->getKey());
    }


    public function create( RequestAbstract $model) {
        return $this->_sendRequest($model, __FUNCTION__ );
    }

    public function update( RequestAbstract $model) {
        return $this->_sendRequest($model, __FUNCTION__ );
    }

    public function delete( RequestAbstract $model) {
        return $this->_sendRequest($model, __FUNCTION__ );
    }

    public function getOne( RequestAbstract $model) {
        return $this->_sendRequest( $model, __FUNCTION__ );
    }

    public function getAll( RequestAbstract $model) {
        return $this->_sendRequest( $model, __FUNCTION__ );
    }


    /**
     * @param RequestAbstract $model
     * @param                 $method
     * @return array
     * @throws \Exception
     */
    private function _sendRequest( RequestAbstract  $model, $method ) {
        $requestService = $model->getRequestService();
        $uri = '/v1/'.$requestService['_resource'];
        $payload = $model->payload();

        if ($model->getId() != null) {
            $uri .= '/'.$model->getId();
            $payload = [];
        }

        try {

            $response = $this->_executeHttpRequest(
                $method,
                $uri,
                $model->getRequestService()['_query'],
                $payload
            );

            if ($response->getStatusCode() == 200) {
                $responseHandler = new ResponseHandler();
                return $responseHandler->handle($method,$requestService['_resource'],$response->getBody());
            }

            if ($response->getStatusCode() == 204) {
                return null;
            }

        } catch (RequestException $e) {

            echo 'error..';

            if ($e->hasResponse()) {
                dd( $e->getResponse(), $e->getRequest() );
            }
            dd( $e->getRequest() );
        }

    }


    /**
     * @param       $method
     * @param       $uri
     * @param array $parameters
     * @param array $body
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    private function _executeHttpRequest($method, $uri, array $parameters = [], array $body = [])
    {
        switch ($method) {
            case 'create':
                return $this->_httpClient->post($uri, ['query' => [], 'form_params' => $body]);
            case 'update':
                return $this->_httpClient->put($uri, ['query' => [], 'form_params' => $body]);
            case 'delete':
                return $this->_httpClient->delete($uri, ['query' => []]);
            case 'getAll':
                return $this->_httpClient->get($uri, ['query' => []]);
            case 'getOne':
                return $this->_httpClient->get($uri, ['query' => []]);
        }
        return null;
    }
}