<?php
use PHPUnit\Framework\TestCase;
use Example\Bird;
use Example\Species;
use Example\Sex;

class BirdTest extends TestCase
{
    public function testPigeon()
    {
        $pigeon = new Bird(Species::PIGEON, Sex::MALE, 30);
        $pigeon->incrementAge();

        $this->assertEquals(Species::PIGEON, $pigeon->getSpecies());
        $this->assertEquals(Sex::MALE, $pigeon->getSex());
        $this->assertEquals(1, $pigeon->getAge());
        $this->assertRegExp("/^Bird.*/", $pigeon);
    }

    public function testDuck()
    {
        $duck = new Bird(Species::DUCK, Sex::FEMALE, 70);

        $this->assertEquals(Species::DUCK, $duck->getSpecies());
        $this->assertEquals(70, $duck->getSize());
    }
}
