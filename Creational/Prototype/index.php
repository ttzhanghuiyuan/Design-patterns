<?php
namespace Creational\Prototype\Tests;

use Creational\Prototype\BarBookPrototype;
use Creational\Prototype\FooBookPrototype;
include('../../reload.php');

class PrototypeTest
{
    public function testCanGetFooBook()
    {
        $fooPrototype = new FooBookPrototype();
        $barPrototype = new BarBookPrototype();

        for($i=0;$i<10;$i++){
            $book = clone $fooPrototype;
            $book->setTitle('Foo Book No'.$i);

            var_dump(FooBookPrototype::class,$book);
            echo "------------- \n";
        }

        for($i=0;$i<5;$i++){
            $book = clone $barPrototype;
            $book->setTitle('Bar Book No'.$i);

            var_dump(BarBookPrototype::class,$book);
            echo "------------- \n";
        }
    }
}

$test = new PrototypeTest;
$test->testCanGetFooBook();
