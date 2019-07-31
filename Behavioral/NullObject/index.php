<?php

namespace Behavioral\NullObject\Tests;

use Behavioral\NullObject\NullLogger;
use Behavioral\NullObject\PrintLogger;
use Behavioral\NullObject\Service;
include('../../reload.php');

/**
 * 创建测试单元 LoggerTest 。
 */
class LoggerTest
{
    /**
     * 测试 NullLogger 对象，联系上文可以知道什么也没做。
     */
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $service->doSomething();
    }

    /**
     * 测试 PrintLogger 对象，联系上文可以知道在日记中写入了 Behavioral\NullObject\Service::doSomething 。
     */
    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        // $this->expectOutputString('We are in Behavioral\NullObject\Service::doSomething');
        $service->doSomething();
    }
}
$test = new LoggerTest;
echo "test============\n";
$test->testNullObject();
echo "\n";
echo "test============\n";
$test->testStandardLogger();
echo "\n";
