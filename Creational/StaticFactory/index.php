<?php

namespace Creational\StaticFactory\Tests;

use Creational\StaticFactory\StaticFactory;
include('../../reload.php');

class StaticFactoryTest
{
    public function testCanCreateNumberFormatter()
    {
        var_dump(StaticFactory::factory('number'));
    }

    public function testCanCreateStringFormatter()
    {
        var_dump(StaticFactory::factory('string'));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testException()
    {
        StaticFactory::factory('object');
    }
}

$test = new StaticFactoryTest;
echo "test============\n";
$test->testCanCreateNumberFormatter();
echo "test============\n";
$test->testCanCreateStringFormatter();
