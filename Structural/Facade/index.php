<?php

namespace Structural\Facade\Tests;

use Structural\Facade\Facade;
use Structural\Facade\OsInterface;
include('../../reload.php');

/**
* 创建自动化测试单元 FacadeTest 。
*/
class FacadeTest
{
    public function testComputerOn()
    {
        /** @var OsInterface|\PHPUnit_Framework_MockObject_MockObject $os */
        $os = $this->createMock('Structural\Facade\OsInterface');

        $os->method('getName')
            ->will($this->returnValue('Linux'));

        $bios = $this->getMockBuilder('Structural\Facade\BiosInterface')
            ->setMethods(['launch', 'execute', 'waitForKeyPress'])
            ->disableAutoload()
            ->getMock();

        $bios->expects($this->once())
            ->method('launch')
            ->with($os);

        $facade = new Facade($bios, $os);

        // 门面接口很简单。
        $facade->turnOn();

        // 但你也可以访问底层组件。
        var_dump($os->getName());
    }
}

$test = new FacadeTest;
echo "test============\n";
$test->testComputerOn();
