<?php
require ('database/DBController.php');

require ('database/Product.php');

//DBController object
$db =new DBController();

//Product object
$product =new Product($db);

$product->getData();
