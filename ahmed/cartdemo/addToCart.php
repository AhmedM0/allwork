<?php

session_start();

include("classes/cart.php");

$cart = new Cart();
$cart->addItemToCart($_GET["name"], 1, $_GET["price"]);
$cart->showItemsInCart();
?>
<a href="index.php">Back to Product Listing</a>