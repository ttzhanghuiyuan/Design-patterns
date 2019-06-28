<?php

namespace Tests\Visitor\Tests;

use Behavioral\Visitor;
include('../../reload.php');

class VisitorTest
{
    /**
     * @var Visitor\RoleVisitor
     */
    private $visitor;

    protected function setUp(){
        $this->visitor = new Visitor\RoleVisitor();
    }

    public function provideRoles(){
        return [
            [new Visitor\User('Dominik')],
            [new Visitor\Group('Administrators')],
        ];
    }

    /**
     * @dataProvider provideRoles
     *
     * @param Visitor\Role $role
     */
    public function testVisitSomeRole(Visitor\Role $role){
        $role->accept($this->visitor);
        var_dump($this->visitor->getVisited()[0]);
    }
}

$test = new VisitorTest;
$role = $test->provideRoles();
foreach($role as $item){
    $test->testVisitSomeRole($item[0]);
    echo "test============\n";
}
