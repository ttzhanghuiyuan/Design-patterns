<?php

namespace Behavioral\Observer\Tests;

use Behavioral\Observer\User;
use Behavioral\Observer\UserObserver;
include('../../reload.php');

class ObserverTest
{
    public function testChangeInUserLeadsToUserObserverBeingNotified()
    {
        $observer = new UserObserver();

        $user = new User();
        $user->attach($observer);

        $user->changeEmail('foo@bar.com');
        var_dump($observer->getChangedUsers());
    }
}

$test = new ObserverTest;
echo "test============\n";
$test->testChangeInUserLeadsToUserObserverBeingNotified();

