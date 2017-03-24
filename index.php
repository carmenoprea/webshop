<?php
session_start();
isset( $_SESSION['toegang']) ? $_SESSION['toegang'] = $_SESSION['toegang'] : $_SESSION['toegang'] = false;

include('./smarty/libs/Smarty.class.php');
include './includes/functions.php';

// create object
$smarty = new Smarty;

// dynamische deel van de webpagina

// products = dynamisch
$products = getProducts();
$smarty->assign("products", $products);

Dispatch();

// Laat de webshop zien
$smarty->display('./templates/main.tpl');


?>