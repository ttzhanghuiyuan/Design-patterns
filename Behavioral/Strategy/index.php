<?php
use Behavioral\Strategy\Context;
use Behavioral\Strategy\DateComparator;
use Behavioral\Strategy\IdComparator;
include('../../reload.php');

class StrategyTest
{
    public function provideIntegers(){
        return [
            [
                [['id' => 2],['id' => 1],['id' => 3]],
                ['id' => 1],
            ],
            [
                [['id' => 3],['id' => 2],['id' => 1]],
                ['id' => 1],
            ],
        ];
    }


    public function provideDates(){
        return [
            [
                [['date' => '2014-03-03'], ['date' => '2015-03-02'], ['date' => '2013-03-01']],
                ['date' => '2013-03-01'],
            ],
            [
                [['date' => '2014-02-03'], ['date' => '2013-02-01'], ['date' => '2015-02-02']],
                ['date' => '2013-02-01'],
            ],
        ];
    }

    /**
     * @dataProvider provideIntegers
     *
     * @param array $collection
     * @param array $expected
     */
    public function testIdComparator($collection)
    {
        $obj = new Context(new IdComparator());
        $elements = $obj->executeStrategy($collection);

        $firstElement = array_shift($elements);
        var_dump($firstElement);
    }

    /**
     * @dataProvider provideDates
     *
     * @param array $collection
     * @param array $expected
     */
    public function testDateComparator($collection)
    {
        $obj = new Context(new DateComparator());
        $elements = $obj->executeStrategy($collection);

        $firstElement = array_shift($elements);
        var_dump($firstElement);
    }
}


$test = new StrategyTest;
echo "test1============\n";
$test->testIdComparator($test->provideIntegers());
echo "test2============\n";
$test->testDateComparator($test->provideDates());
