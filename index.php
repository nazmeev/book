<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('include_path', __DIR__);

include_once "Autoloader.php";



$t_shirt = new Shop\Product\SimpleProduct();
//
//$t_shirt->setBrand('Armani');
//$t_shirt->setName('Sorochka');
//$t_shirt->setPrice(8999.99);

echo "<pre>";
//print_r($t_shirt);
//
//
$customer = new Shop\Customer\Customer();
$customer->setName('Ivan');
$customer->setData('surname', 'lastname');
//print_r($customer->getSurname());
//var_dump($customer->getName());

$cart = new Shop\Cart\Cart($customer);
//$cart->setCustomer($customer);
$cart->addProduct($t_shirt);//агрегация

print_r($cart);