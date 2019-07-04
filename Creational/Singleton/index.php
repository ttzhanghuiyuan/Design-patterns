<?php

namespace Creational\Singleton\Tests;

use Creational\Singleton\Singleton;
include('../../reload.php');

class SingletonTest
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        var_dump(Singleton::class);
        echo "-----------\n";
        var_dump($firstCall);
        echo "-----------\n";
        var_dump($secondCall);
    }
}

$test = new SingletonTest;
$test->testUniqueness();
