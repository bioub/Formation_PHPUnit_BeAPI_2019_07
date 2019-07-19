<?php

use BEAPI\Service\StarWarsService;
use Goutte\Client;

require_once __DIR__ . '/vendor/autoload.php';

$client = new Client();
$swApi = new StarWarsService($client);
$ctrl = new \BEAPI\Controller\StarWarsController($swApi);

echo $ctrl->pageLuke();