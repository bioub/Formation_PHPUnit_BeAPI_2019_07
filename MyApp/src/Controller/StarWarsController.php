<?php


namespace BEAPI\Controller;


use BEAPI\Service\StarWarsService;
use Goutte\Client;

class StarWarsController
{
    /** @var StarWarsService */
    protected $swApi;

    public function __construct(StarWarsService $swApi)
    {
        $this->swApi = $swApi;
    }

    public function pageLuke()
    {
        $people = $this->swApi->getPeopleById(1);

        return "<body><h2>$people[name]</h2></body>";
    }
}