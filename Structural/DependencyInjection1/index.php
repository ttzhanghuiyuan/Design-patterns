<?php

namespace Structural\DependencyInjection\Tests;

use Structural\DependencyInjection1\DatabaseConfiguration;
use Structural\DependencyInjection1\DatabaseConnection;
include('../../reload.php');

class DependencyInjectionTest
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'domnikl', '1234');
        $connection = new DatabaseConnection($config);

        var_dump($connection->getDsn());
    }
}
$test = new DependencyInjectionTest;
echo "test============\n";
$test->testDependencyInjection();
