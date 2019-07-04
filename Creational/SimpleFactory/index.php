<?php

namespace Creational\SimpleFactory\Tests;

use Creational\SimpleFactory\Bicycle;
use Creational\SimpleFactory\SimpleFactory;
include('../../reload.php');

class SimpleFactoryTest
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        var_dump(Bicycle::class);
        var_dump($bicycle);
    }
}

$test = new SimpleFactoryTest;
$test->testCanCreateBicycle();
