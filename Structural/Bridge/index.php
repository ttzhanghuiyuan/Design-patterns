<?php

namespace Structural\Bridge\Tests;

use Structural\Bridge\HelloWorldService;
use Structural\Bridge\HtmlFormatter;
use Structural\Bridge\PlainTextFormatter;
include('../../reload.php');

/**
 * 创建自动化测试单元 BridgeTest 。
 */
class BridgeTest
{

    /**
     * 使用 HelloWorldService 分别测试文本格式实现类和 HTML 格式实
     * 现类。
     */
    public function testCanPrintUsingThePlainTextPrinter()
    {
        $service = new HelloWorldService(new PlainTextFormatter());
        var_dump($service->get());

        // 现在更改实现方法为使用 HTML 格式器。
        $service->setImplementation(new HtmlFormatter());
        var_dump($service->get());
    }
}

$test = new BridgeTest;
echo "test============\n";
$test->testCanPrintUsingThePlainTextPrinter();

