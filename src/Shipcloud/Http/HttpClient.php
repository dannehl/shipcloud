<?php
namespace Dannehl\Shipcloud\Http;

use GuzzleHttp\Client;
use Psr\Http\Message\RequestInterface;

/**
 * Class HttpClient
 *
 * @package Dannehl\Shipcloud\Http
 */
class HttpClient extends Client implements HttpInterface{

    /** @var array  */
    protected $apiKey;

    /**
     * @param array $apiKey
     */
    public function __construct($apiKey) {

        $this->apiKey = $apiKey;

        parent::__construct([
            'base_uri'  => 'https://api.shipcloud.io/v1/',
            'auth'      => [$apiKey, null]
        ]);
    }

    /**
     * @param RequestInterface $request
     * @param array            $options
     * @return mixed
     */
    public function send(RequestInterface $request, array $options = []) {

        return parent::send($request, $options);
    }



}