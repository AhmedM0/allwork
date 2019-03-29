<?php
session_start();
include("classes/cart.php");

// NOW I HAVE ACCESS TO ALL MY CART METHODS
$cart = new Cart();
$cart->removeFromCart($_GET["i"]); // which array item are we removing from the cart

header("location: showItemsInCart.php");
?>