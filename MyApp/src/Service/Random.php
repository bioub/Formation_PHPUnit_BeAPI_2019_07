<?php


namespace BEAPI\Service;


class Random
{
    public function getInt($min, $max) {
        return mt_rand($min, $max);
    }
}