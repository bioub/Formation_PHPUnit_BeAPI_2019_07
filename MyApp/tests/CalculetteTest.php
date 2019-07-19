<?php


namespace BEAPITest;


use BEAPI\Calculette;
use PHPUnit\Framework\TestCase;

class CalculetteTest extends TestCase
{
    public function testAddition()
    {
        $this->assertEquals(3, Calculette::addition(1, 2), 'Calculette::addition(1, 2) === 3');
        $this->assertEquals(0, Calculette::addition(1, -1), 'Calculette::addition(1, -1) === 0');
        $this->assertEquals(-3, Calculette::addition(-1, -2), 'Calculette::addition(-1, -2) === -3');
    }
}