<?php

namespace BEAPI\Service;

use Goutte\Client;
use Symfony\Component\BrowserKit\Response;

class StarWarsService
{
    /** @var Client */
    protected $client;

    /**
     * StarWarsService constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getPeopleById($id)
    {
        $this->client->request('GET', "https://swapi.co/api/people/$id");

        /** @var Response $response */
        $response = $this->client->getResponse();

        return json_decode($response->getContent(), true);
    }
}