<?php

class Cart
{
    var $arrCartItems = array();

    function __construct()
    {

    }

    function addItemToCart($name, $qty, $price)
    {
      // add item to my cart
      $_SESSION["arrCart"][] = array($name, $qty, $price);
    }

    function showItemsInCart()
    {
      return $_SESSION["arrCart"];
    }

    function getNumberItemsInCart()
    {
      // count() shows us how many items are in an array
      $cartCount = 0;
      foreach($_SESSION["arrCart"] as $itemInCart)
      {
        $cartCount = $cartCount + $itemInCart[1];
      }

      echo $cartCount;
      //return $cartCount;
    }

    function removeFromCart($itemIndex)
    {
      // remove the item from the array based on that index
      unset($_SESSION["arrCart"][$itemIndex]);
    }

    function emptyCart()
    {
      foreach($_SESSION["arrCart"] as $index=>$itemInCart)
      {
        $this->removeFromCart($index);
      }
    }
}
?>