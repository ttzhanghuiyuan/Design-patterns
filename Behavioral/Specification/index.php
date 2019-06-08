<?php
use Behavioral\Specification\Item;
use Behavioral\Specification\NotSpecification;
use Behavioral\Specification\OrSpecification;
use Behavioral\Specification\AndSpecification;
use Behavioral\Specification\PriceSpecification;

include('../../reload.php');

class SpecificationTest
{
    public function testCanOr()
    {
        $spec1 = new PriceSpecification(50, 99);
        $spec2 = new PriceSpecification(101, 200);

        $orSpec = new OrSpecification($spec1, $spec2);

        var_dump($orSpec->isSatisfiedBy(new Item(100)));
        var_dump($orSpec->isSatisfiedBy(new Item(51)));
        var_dump($orSpec->isSatisfiedBy(new Item(150)));
    }

    public function testCanAnd()
    {
        $spec1 = new PriceSpecification(50, 100);
        $spec2 = new PriceSpecification(80, 200);

        $andSpec = new AndSpecification($spec1, $spec2);

        var_dump($andSpec->isSatisfiedBy(new Item(150)));
        var_dump($andSpec->isSatisfiedBy(new Item(1)));
        var_dump($andSpec->isSatisfiedBy(new Item(51)));
        var_dump($andSpec->isSatisfiedBy(new Item(100)));
    }

    public function testCanNot()
    {
        $spec1 = new PriceSpecification(50, 100);
        $notSpec = new NotSpecification($spec1);

        var_dump($notSpec->isSatisfiedBy(new Item(150)));
        var_dump($notSpec->isSatisfiedBy(new Item(50)));
    }
}

$test = new SpecificationTest;
echo "test1============\n";
$test->testCanOr();
echo "test2============\n";
$test->testCanAnd();
echo "test3============\n";
$test->testCanNot();
