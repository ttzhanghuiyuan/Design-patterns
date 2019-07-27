<?php

namespace Behavioral\Command\Tests;

use Behavioral\Command\HelloCommand;
use Behavioral\Command\Invoker;
use Behavioral\Command\Receiver;
include('../../reload.php');

class CommandTest
{
    public function testInvocation()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        var_dump($receiver->getOutput());
        // $this->assertEquals('Hello World', $receiver->getOutput());
    }
}

$test = new CommandTest;
echo "test============\n";
$test->testInvocation();

