<?php

namespace More\Delegation\Tests;

use More\Delegation;
include('../../reload.php');

class DelegationTest{
    public function testHowTeamLeadWriteCode(){
        $junior = new Delegation\JuniorDeveloper();
        $teamLead = new Delegation\TeamLead($junior);

        var_dump($junior->writeBadCode());
        var_dump($teamLead->writeCode());
    }
}

$test = new DelegationTest;
echo "test============\n";
$test->testHowTeamLeadWriteCode();
