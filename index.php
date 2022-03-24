<?php


require_once ('Class/Cart.php');

$cart=new Cart(20,100);
var_dump($cart->quantity);
