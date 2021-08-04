<?php
ob_start();
include 'header.php';
?>

<?php

count($product->getData('cart')) ? include './Template/_cart.php': include './Template/notFound/_cart_notFound.php';
include './Template/_wishlist.php';
include './Template/_new-phones.php';
?>

<?php
   include 'footer.php';
   ?>