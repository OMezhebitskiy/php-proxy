<?php

namespace Proxy\Adapter\Guzzle;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Proxy\Adapter\AdapterInterface;
use Psr\Http\Message\RequestInterface;

class GuzzleAdapter implements AdapterInterface
{
    /**
     * The Guzzle client instance.
     * @var Client
     */
    protected Client $client;

    /**
     * Construct a Guzzle based HTTP adapter.
     * @param Client|null $client
     */
    public function __construct(Client $client = null)
    {
        $this->client = $client ?: new Client;
    }

    /**
     * @inheritdoc
     * @throws GuzzleException
     */
    public function send(RequestInterface $request): \Psr\Http\Message\ResponseInterface
    {
        return $this->client->send($request);
    }
}
