<?php
namespace Structural\Composite\Tests;

use Structural\Composite;
include('../../reload.php');

class CompositeTest
{
    public function testRender()
    {
        $form = new Composite\Form();
        $form->addElement(new Composite\TextElement('Email:'));
        $form->addElement(new Composite\InputElement());
        $embed = new Composite\Form();
        $embed->addElement(new Composite\TextElement('Password:'));
        $embed->addElement(new Composite\InputElement());
        $form->addElement($embed);

        // 此代码仅作示例。在实际场景中，现在的网页浏览器根本不支持
        // 多表单嵌套，牢记该点非常重要

        var_dump($form->render());
    }
}


$test = new CompositeTest;
echo "test============\n";
$test->testRender();
