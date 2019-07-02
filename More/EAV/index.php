<?php

namespace More\EAV\Tests;

use More\EAV\Attribute;
use More\EAV\Entity;
use More\EAV\Value;
include('../../reload.php');

class EAVTest
{
    public function testCanAddAttributeToEntity()
    {
        $colorAttribute = new Attribute('color');
        $colorSilver = new Value($colorAttribute,'silver');
        $colorBlack = new Value($colorAttribute,'black');


        $memoryAttribute = new Attribute('memory');
        $memory8Gb = new Value($memoryAttribute,'8GB');

        $entity = new Entity('MacBook Pro',[$colorSilver,$colorBlack,$memory8Gb]);

        var_dump($entity);
    }
}


$test = new EAVTest;
echo "test============\n";
$test->testCanAddAttributeToEntity();

