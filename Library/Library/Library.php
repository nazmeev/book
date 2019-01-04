<?php
namespace Library\Library;
use Library\Book\BookInterface;

class Library extends \Library\DataObject{

    private $books = [];

    public function addBook(BookInterface $book)
    {
        $this->books[] = $book;
        echo "++++";
        print_r($this->books);
        echo "---";
    }
}