<?php

namespace Creational\Pool\Tests;

use Creational\Pool\WorkerPool;
include('../../reload.php');

class PoolTest
{
    public function testCanGetNewInstancesWithGet()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $worker2 = $pool->get();

        var_dump($pool);
        var_dump($worker1);
        var_dump($worker2);
    }

    public function testCanGetSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $pool->dispose($worker1);
        $worker2 = $pool->get();

        var_dump($pool);
        var_dump($worker1);
        var_dump($worker2);
    }
}

$test = new PoolTest;
echo "test============\n";
$test->testCanGetNewInstancesWithGet();
echo "test============\n";
$test->testCanGetSameInstanceTwiceWhenDisposingItFirst();
