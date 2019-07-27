<?php

namespace Behavioral\Iterator\Tests;

use Behavioral\Iterator\Book;
use Behavioral\Iterator\BookList;
use Behavioral\Iterator\BookListIterator;
use Behavioral\Iterator\BookListReverseIterator;
include('../../reload.php');

class IteratorTest
{
    public function testCanIterateOverBookList()
    {
        $bookList = new BookList();
        $bookList->addBook(new Book('Learning PHP Design Patterns', 'William Sanders'));
        $bookList->addBook(new Book('Professional Php Design Patterns', 'Aaron Saray'));
        $bookList->addBook(new Book('Clean Code', 'Robert C. Martin'));

        $books = [];

        foreach ($bookList as $book) {
            $books[] = $book->getAuthorAndTitle();
        }

        var_dump($books);
    }

    public function testCanIterateOverBookListAfterRemovingBook()
    {
        $book = new Book('Clean Code', 'Robert C. Martin');
        $book2 = new Book('Professional Php Design Patterns', 'Aaron Saray');

        $bookList = new BookList();
        $bookList->addBook($book);
        $bookList->addBook($book2);
        $bookList->removeBook($book);

        $books = [];
        foreach ($bookList as $book) {
            $books[] = $book->getAuthorAndTitle();
        }

        var_dump($books);
    }

    public function testCanAddBookToList()
    {
        $book = new Book('Clean Code', 'Robert C. Martin');

        $bookList = new BookList();
        $bookList->addBook($book);


        var_dump($bookList);
    }

    public function testCanRemoveBookFromList()
    {
        $book = new Book('Clean Code', 'Robert C. Martin');

        $bookList = new BookList();
        $bookList->addBook($book);
        $bookList->removeBook($book);

        var_dump($bookList);
    }
}

$test = new IteratorTest;
echo "test============\n";
$test->testCanIterateOverBookList();
echo "test============\n";
$test->testCanIterateOverBookListAfterRemovingBook();
echo "test============\n";
$test->testCanAddBookToList();
echo "test============\n";
$test->testCanRemoveBookFromList();

