<?php


namespace BEAPITest\Controller;


use BEAPI\Service\StarWarsService;
use Goutte\Client;
use PHPUnit\Framework\TestCase;

class StarWarsControllerTest extends TestCase
{
    public function testPageLuke()
    {
        $client = new Client();
        $swApi = new StarWarsService($client);
        $ctrl = new \BEAPI\Controller\StarWarsController($swApi);

        $this->assertStringContainsString('<h2>Luke Skywalker</h2>', $ctrl->pageLuke());
    }
}