<?php
namespace Library\Book;

class Book extends \Library\DataObject implements BookInterface {

    private $books = [];
    /**
     * @param string $name
     */
    public function setName($name){
        $this->data['bookName'] = $name;
    }

    /**
     * @return string
     */
    public function getName(){
        return $this->getData('bookName');
    }

    /**
     * @param string $name
     */
    public function setAuthor($name){
        $this->data['authorName'] = $name;
    }

    /**
     * @return string
     */
    public function getAuthor(){
        return $this->getData('authorName');
    }

    /**
     * @param string $name
     */
    public function setType($name){
        $this->data['typeName'] = $name;
    }

    /**
     * @return string
     */
    public function getType(){
        return $this->getData('typeName');
    }

    /**
     * @param string $name
     */
    public function setCategory($name){
        $this->data['categoryName'] = $name;
    }

    /**
     * @return string
     */
    public function getCategory(){
        return $this->getData('categoryName');
    }

    public function addBook(BookInterface $book)
    {
        $this->books[] = $book;
    }
}