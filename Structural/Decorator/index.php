<?php

namespace Structural\Decorator\Tests;

use Structural\Decorator;
include('../../reload.php');

/**
 * 创建自动化测试单元 DecoratorTest 。
 */
class DecoratorTest
{
    /**
     * @var Decorator\Webservice
     */
    private $service;

    /** 
     * 传入字符串 'foobar' 。
     */
    protected function setUp()
    {
        $this->service = new Decorator\Webservice('foobar');
    }

    /**
     * 测试 JSON 装饰者。
     * 这里的 assertEquals 是为了判断返回的结果是否符合预期。
     */
    public function testJsonDecorator()
    {
        $this->setUp();
        $service = new Decorator\JsonRenderer($this->service);

        var_dump($service->renderData());
    }

    /**
     * 测试 Xml 装饰者。
     */
    public function testXmlDecorator()
    {
        $this->setUp();
        $service = new Decorator\XmlRenderer($this->service);

        var_dump($service->renderData());
    }
}

$test = new DecoratorTest;
echo "test============\n";
$test->testJsonDecorator();
echo "test============\n";
$test->testXmlDecorator();
