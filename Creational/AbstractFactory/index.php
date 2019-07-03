<?php

namespace Creational\AbstractFactory\Tests;
use Creational\AbstractFactory\DigitalProduct;
use Creational\AbstractFactory\ProductFactory;
use Creational\AbstractFactory\ShippableProduct;
include('../../reload.php');

class AbstractFactoryTest
{
    public function testCanCreateDigitalProduct()
    {
        $factory = new ProductFactory();
        $product  = $factory->createDigitalProduct(150);
        var_dump(DigitalProduct::class,$product);
    }

    public function testCanCreateShippableProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createShippableProduct(150);
        var_dump(ShippableProduct::class,$product);
    }

    public function testCanCalculatePriceForDigitalProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createDigitalProduct(150);
        var_dump($product->calculatePrice());
    }

    public function testCanCalculatePriceForShippableProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createShippableProduct(150);
        var_dump($product->calculatePrice());
    }

}


$test = new AbstractFactoryTest;
echo "test============\n";
$test->testCanCreateDigitalProduct();
echo "test============\n";
$test->testCanCreateShippableProduct();
echo "test============\n";
$test->testCanCalculatePriceForDigitalProduct();
echo "test============\n";
$test->testCanCalculatePriceForShippableProduct();

