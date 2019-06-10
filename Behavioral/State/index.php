<?php

namespace Behavioral\State\Tests;

use Behavioral\State\ContextOrder;
use Behavioral\State\CreateOrder;

include('../../reload.php');

class StateTest
{
    public function testCanShipCreatedOrder(){
        $order = new CreateOrder();
        $contextOrder = new ContextOrder();
        $contextOrder->setState($order);
        $contextOrder->done();

        var_dump($contextOrder->getStatus());
    }

    public function testCanCompleteShippedOrder(){
        $order = new CreateOrder();
        $contextOrder = new ContextOrder();
        $contextOrder->setState($order);
        $contextOrder->done();
        $contextOrder->done();

        var_dump($contextOrder->getStatus());
    }
}

$test = new StateTest;
echo "test1============\n";
$test->testCanShipCreatedOrder();
echo "test2============\n";
$test->testCanCompleteShippedOrder();
