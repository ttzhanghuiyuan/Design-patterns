<?php

namespace Structural\FluentInterface\Tests;

use Structural\FluentInterface\Sql;
include('../../reload.php');

class FluentInterfaceTest
{
    public function testBuildSQL()
    {
        $query = (new Sql())
            ->select(['foo', 'bar'])
            ->from('foobar', 'f')
            ->where('f.bar = ?');

        var_dump((string)$query);
    }
}

$test = new FluentInterfaceTest;
echo "test============\n";
$test->testBuildSQL();
