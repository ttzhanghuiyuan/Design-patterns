<?php

namespace Behavioral\TemplateMethod\Tests;

use Behavioral\TemplateMethod;
include('../../reload.php');

class JourneyTest
{
    public function testCanGetOnVacationOnTheBeach(){
        $beachjourney = new TemplateMethod\BeachJourney();
        $beachjourney->takeATrip();

        var_dump($beachjourney->getThingsToDo());
    }

    public function testCanGetOnAJourneyToACity()
    {
        $cityJourney = new TemplateMethod\CityJourney();
        $cityJourney->takeATrip();

        var_dump($cityJourney->getThingsToDo());
    }
}

$test = new JourneyTest;
echo "test1============\n";
$test->testCanGetOnVacationOnTheBeach();
echo "test2============\n";
$test->testCanGetOnAJourneyToACity();
