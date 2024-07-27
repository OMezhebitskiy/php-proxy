<?php

namespace Proxy\Adapter\Dummy;

use Proxy\Adapter\AdapterInterface;
use Psr\Http\Message\RequestInterface;
use Laminas\Diactoros\Response;

class DummyAdapter implements AdapterInterface
{
    /**
     * @inheritdoc
     */
    public function send(RequestInterface $request): Response|\Psr\Http\Message\ResponseInterface
    {
        return new Response($request->getBody(), 200);
    }
}
