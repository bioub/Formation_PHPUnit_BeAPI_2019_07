<?php


namespace BEAPITest\Service;


use BEAPI\Service\StarWarsService;
use Goutte\Client;
use PHPUnit\Framework\TestCase;

class StarWarsServiceTest extends TestCase
{
    public function testGetPeopleById()
    {
        $client = new Client();
        $swApi = new StarWarsService($client);
        $people = $swApi->getPeopleById(1);

        $this->assertEquals('Luke Skywalker', $people['name']);
    }
}