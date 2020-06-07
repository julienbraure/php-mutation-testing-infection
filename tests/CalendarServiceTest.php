<?php
use PHPUnit\Framework\TestCase;

use Example\Bird;
use Example\Species;
use Example\Sex;
use Example\CalendarService;

class CalendarServiceTest extends TestCase
{
    /** @var CalendarService */
    private $calendarService;

    public function setUp()
    {
        $this->calendarService = new CalendarService();
    }

    public function testIsItSpringYetIsTrueWhen2SwallowAndOthers()
    {
        $this->assertTrue($this->calendarService->isItSpringYet([
           new Bird(Species::PIGEON, Sex::MALE, 60),
           new Bird(Species::SWALLOW, Sex::FEMALE, 15),
           new Bird(Species::CROW, Sex::MALE, 80),
           new Bird(Species::SWALLOW, Sex::MALE, 18),
        ]));
    }

    public function testIsItSpringYetIsFalseWhen1Swallow()
    {
        $this->assertFalse($this->calendarService->isItSpringYet([
           new Bird(Species::SWALLOW, Sex::MALE, 18),
        ]));
    }
}
