<?php


namespace BEAPITest\Controller;


use BEAPI\Controller\StarWarsController;
use BEAPI\Service\StarWarsService;
use BEAPITest\Fake\FakeStarWarsService;
use Goutte\Client;
use PHPUnit\Framework\TestCase;

class StarWarsControllerTest extends TestCase
{
    public function testPageLukeWithRealService()
    {
        $client = new Client();
        $swApi = new StarWarsService($client);
        $ctrl = new StarWarsController($swApi);

        $this->assertStringContainsString('<h2>Luke Skywalker</h2>', $ctrl->pageLuke());
    }

    public function testPageLukeWithFakeService()
    {
        $swApi = new FakeStarWarsService();
        $ctrl = new StarWarsController($swApi);

        $this->assertStringContainsString('<h2>Dark Vador</h2>', $ctrl->pageLuke());
    }

    public function testPageLukeWithStubService()
    {
        $stub = $this->prophesize(StarWarsService::class);
        $stub->getPeopleById(1)->willReturn(['name' => 'Yoda']);
        // $stub->getPeopleById(2)->willReturn(['name' => 'R2D2']);

        $swApi = $stub->reveal();

        $ctrl = new StarWarsController($swApi);

        $this->assertStringContainsString('<h2>Yoda</h2>', $ctrl->pageLuke());
    }

    public function testPageLukeWithMockService()
    {
        $mock = $this->prophesize(StarWarsService::class);
        $mock->getPeopleById(1)->willReturn(['name' => 'Yoda'])->shouldBeCalledOnce();

        $swApi = $mock->reveal();

        $ctrl = new StarWarsController($swApi);

        $this->assertStringContainsString('<h2>Yoda</h2>', $ctrl->pageLuke());
    }


    public function testPageLukeWithSpyService()
    {
        $double = $this->prophesize(StarWarsService::class);
        $spy = $double->getPeopleById(1)->willReturn(['name' => 'Yoda']);

        $swApi = $double->reveal();

        $ctrl = new StarWarsController($swApi);

        $this->assertStringContainsString('<h2>Yoda</h2>', $ctrl->pageLuke());

        $spy->shouldHaveBeenCalledOnce();
    }
}