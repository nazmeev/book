<?php

namespace Library\Book;
interface BookInterface{
    /**
     * @return string
     */
    public function getType();
    /**
     * @return string
     */
    public function setType($typeName);

    /**
     * @return string
     */
    public function getAuthor();
    /**
     * @return string
     */
    public function setAuthor($authorName);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getCategory();

    /**
     * @param string $name
     */
    public function setCategory($categoryName);

}