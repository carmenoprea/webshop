<?php

include('functions.php');
include('dbConnect.php');

// Smarty 

if (!isset($smarty)) {
    session_start();
    include('../smarty/libs/Smarty.class.php');
    $smarty = new Smarty;
    }
    
    
    $orders = getOrders();
    $smarty->assign("orders", $orders);
    $smarty->display('../templates/bestellingen.tpl');    
    // checkout
    


?>