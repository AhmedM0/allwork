<?php
session_start();
include("classes/cart.php");

// NOW I HAVE ACCESS TO ALL MY CART METHODS
$cart = new Cart();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Store Items</title>
  <style>
  .cartCount {position: absolute; top: 20px; right: 20px; background: hotpink; border-radius: 100px; color: #ffffff; font-family: aria;}
  </style>
</head>
<body>
  
  <div class="cartCount"><a href="showItemsInCart.php"><?=$cart->getNumberItemsInCart()?></a></div>
  <h1>Your Cart Contents...</h1>
  <?php

  foreach($cart->showItemsInCart() as $index=>$cartItem){
      echo "<a href='removeItemFromCart.php?i=$index'>".$cartItem[0]."</a> ".$cartItem[2]."<br/>";
    }
  ?>

  <!--- loop over all the items in cart... 
    and make them show nicely
    and give them a link to remove that item from the cart
    and you can have a empty cart link
    and you could have a back to product listing page.... -->

  
</body>
</html>