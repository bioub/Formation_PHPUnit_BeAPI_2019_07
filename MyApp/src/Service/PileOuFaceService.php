<?php


namespace BEAPI\Service;


class PileOuFaceService
{
    /** @var Random */
    protected $random;

    public function __construct(Random $random)
    {
        $this->random = $random;
    }

    /* Tester cette fonction avec un mock via prophecy (Code Objet) */
    public function pileOuFace()
    {
        return $this->random->getInt(0, 1) ? 'pile' : 'face';
    }

    /* Tester cette fonction avec fake mt_rand (Wordpress) */
    public function pileOuFaceNativeFunction()
    {
        return mt_rand(0, 1) ? 'pile' : 'face';
    }
}