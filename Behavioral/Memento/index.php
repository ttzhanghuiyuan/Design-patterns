<?php
namespace Behavioral\Memento\Tests;

use Behavioral\Memento\State;
use Behavioral\Memento\Ticket;
include('../../reload.php');

class MementoTest
{
    public function testOpenTicketAssignAndSetBackToOpen()
    {
        $ticket = new Ticket();

        // 打开 ticket
        $ticket->open();
        $openedState = $ticket->getState();
        var_dump((string) $ticket->getState());

        $memento = $ticket->saveToMemento();

        // 分配 ticket
        $ticket->assign();
        var_dump((string) $ticket->getState());

        // 现在已经恢复到已打开的状态，但需要验证是否已经克隆了当前状态作为副本
        $ticket->restoreFromMemento($memento);

        var_dump((string) $ticket->getState());
        var_dump((string) $openedState);
    }
}
$test = new MementoTest;
echo "test============\n";
$test->testOpenTicketAssignAndSetBackToOpen();
