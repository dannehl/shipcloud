<?php

namespace Dannehl\Shipcloud\Http;

use Psr\Http\Message\RequestInterface;

/**
 * Interface HttpInterface
 *
 * @package Dannehl\Shipcloud\Http
 */
interface HttpInterface {

    /**
     * @param RequestInterface $request
     * @param array            $options
     * @return mixed
     */
    public function send(RequestInterface $request, array $options = []);

}