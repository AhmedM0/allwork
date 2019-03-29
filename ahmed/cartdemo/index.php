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
  .cartCount {
    position: absolute; 
    top: 20px; 
    right: 20px; 
    background: hotpink; 
    border-radius: 100px; 
    color: #fff; 
    width: 50px; 
    height: 50px;
    text-align: center;
    padding-top: 10px;
    }

  .cartCount a {
    color: #fff;
    text-decoration: none;
    font-size: 30px;
    
  }
  </style>
</head>
<body>
  
  <div class="cartCount"><a href="showItemsInCart.php"><?=$cart->getNumberItemsInCart()?></a></div>


  <h1><a href="addToCart.php?name=Air Jordan&price=150">Air Jordan, $150</a></h1>
  <h1><a href="addToCart.php?name=Hair Gel&price=200">Hair Gel, $200</a></h1>
  <h1><a href="addToCart.php?name=Doederant&price=1">Doederant, $1</a></h1>
  <h1><a href="addToCart.php?name=Figure Skates&price=85">Figure Skates, $85</a></h1>
  <h1><a href="addToCart.php?name=Salomon Lords&price=850">Salomon Lords, $850</a></h1>

</body>
</html>