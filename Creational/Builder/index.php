<?php

namespace Creational\Builder\Tests;

use Creational\Builder\Parts\Car;
use Creational\Builder\Parts\Truck;
use Creational\Builder\TruckBuilder;
use Creational\Builder\CarBuilder;
use Creational\Builder\Director;
include('../../reload.php');

class DirectorTest
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle  = (new Director())->build($truckBuilder);

        var_dump(Truck::class,$newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        var_dump(Car::class,$newVehicle);
    }
}

$test = new DirectorTest;
echo "test============\n";
$test->testCanBuildTruck();
echo "test============\n";
$test->testCanBuildCar();

