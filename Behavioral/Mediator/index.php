<?php

namespace Tests\Mediator\Tests;

use Behavioral\Mediator\Mediator;
use Behavioral\Mediator\Subsystem\Client;
use Behavioral\Mediator\Subsystem\Database;
use Behavioral\Mediator\Subsystem\Server;
include('../../reload.php');

class MediatorTest
{
    public function testOutputHelloWorld()
    {
        $client = new Client();
        new Mediator(new Database(), $client, new Server());

        var_dump($client->request());
    }
}
$test = new MediatorTest;
echo "test============\n";
$test->testOutputHelloWorld();
