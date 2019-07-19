<?php


namespace BEAPITest\Service;


use BEAPI\Service\PileOuFaceService;
use BEAPI\Service\Random;
use function Patchwork\always;
use function Patchwork\redefine;
use function Patchwork\restore;
use PHPUnit\Framework\TestCase;

class PileOuFaceServiceTest extends TestCase
{
    public function testPileOuFace()
    {
        // remplacer $random par un objet généré
        // par prophecy, et qui contiendra une fausse
        // fonction getInt
        $prophecy = $this->prophesize(Random::class);
        $prophecy->getInt(0, 1)->willReturn(1, 0)->shouldBeCalledTimes(2);

        // $random = new Random();
        $random = $prophecy->reveal();

        $service = new PileOuFaceService($random);
        $this->assertEquals('pile', $service->pileOuFace());
        $this->assertEquals('face', $service->pileOuFace());
    }

    public function testPileOuFaceNativeFunction()
    {
        $handle = redefine('mt_rand', always(1));

        $random = new Random();
        $service = new PileOuFaceService($random);
        $this->assertEquals('pile', $service->pileOuFaceNativeFunction());

        restore($handle);
    }
}