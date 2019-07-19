<?php


namespace BEAPITest\Fake;


use BEAPI\Service\StarWarsService;

class FakeStarWarsService extends StarWarsService
{
    public function __construct()
    {

    }

    public function getPeopleById($id)
    {
        return [
            'name' => 'Dark Vador',
        ];
    }


}