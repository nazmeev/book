<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('include_path', __DIR__);

include_once "Autoloader.php";

//$db = new Library\Database\QueryBuilder(Library\Database\Connection::connect());
//$books = $db->select("books");
//print_r($books); die;

$book = new Library\Book\Book();

$book->setName('Преступление и наказание');
$book->setAuthor('Ф.М.Достоевский');
$book->setCategory('роман');

echo "<pre>";
//print_r($book);

$library = new Library\Library\Library();
$library->addBook($book);

$book->setName('Преступление и наказание2');
$book->setAuthor('Ф.М.Достоевский2');
$book->setCategory('роман2');

$library->addBook($book);

$book->setName('Преступление и наказание3');
$book->setAuthor('Ф.М.Достоевский3');
$book->setCategory('роман3');

$library->addBook($book);
//print_r($library);
echo "stop";
//$customer = new Shop\Customer\Customer();
//$customer->setName('Ivan');
//$customer->setData('surname', 'lastname');
//print_r($customer->getSurname());
////var_dump($customer->getName());
//
//$cart = new Shop\Cart\Cart($customer);
////$cart->setCustomer($customer);
//$cart->addProduct($t_shirt);//агрегация

//print_r($cart);