<?php
session_start();
include('./smarty/libs/Smarty.class.php');
include('./includes/functions.php');

// create object
$smarty = new Smarty;

// dynamische deel van de webpagina

// producten = dynamisch
$products = getProducts();
$smarty->assign("products", $products);


// Laat de webshop zien
$smarty->display('/templates/main.tpl');
  

?>
