<?php

namespace Structural\Flyweight\Tests;

use Structural\Flyweight\FlyweightFactory;
include('../../reload.php');

/**
 * 创建自动化测试单元 FlyweightTest 。
 */
class FlyweightTest
{
    private $characters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k',
        'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    private $fonts = ['Arial', 'Times New Roman', 'Verdana', 'Helvetica'];

    public function testFlyweight()
    {
        $factory = new FlyweightFactory();

        foreach ($this->characters as $char) {
            foreach ($this->fonts as $font) {
                $flyweight = $factory->get($char);
                $rendered = $flyweight->render($font);

                var_dump($rendered);
            }
        }

        // 享元模式会保证实例被分享。
        // 相比拥有成百上千的私有对象，
        // 必须要有一个实例代表所有被重复使用来显示不同单词的字符。
        var_dump($factory);
    }
}

$test = new FlyweightTest;
echo "test============\n";
$test->testFlyweight();
