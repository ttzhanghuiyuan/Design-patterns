<?php

namespace Structural\Adapter\Tests;

use Structural\Adapter\Book;
use Structural\Adapter\EBookAdapter;
use Structural\Adapter\Kindle;
include('../../reload.php');

class AdapterTest
{
    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();

        var_dump($book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        var_dump($book->getPage());
    }
}

$test = new AdapterTest;
echo "test============\n";
$test->testCanTurnPageOnBook();
echo "test============\n";
$test->testCanTurnPageOnKindleLikeInANormalBook();

