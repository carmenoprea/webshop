<?php
/*****************************************************************************
 *                                                                           *
 * Shop-Script FREE                                                          *
 * Copyright (c) 2004 Articus consulting group. All rights reserved.         *
 *                                                                           *
 * modified by Me 2016
 ****************************************************************************/


// als opgestart zonder index.php    
if (!isset($smarty)) {
    session_start();
    include('../smarty/libs/Smarty.class.php');
    $smarty = new Smarty;
}
$smarty->assign('cart_total', "");
// cart
 
	
if (isset($_GET["cart"]) || isset($_POST["cart"]) || isset($_POST["update"]) ) 
{

        if (isset($_GET["add"]) && !empty($_GET["productID"])) //add to cart 
        {

                $result =  add2cart( $_GET['productID'] );


                if (!isset($_SESSION["cart"]))
                {
                        $_SESSION["cart"] = array();
                        $_SESSION["counts"] = array();
                }
                //check for current item in the current cart content
                $i=0;
                while ($i<count($_SESSION["cart"]) && $_SESSION["cart"][$i] != $_GET["productID"]) $i++;
                if ($i < count($_SESSION["cart"])) //increase current product's quantity
                {
                        $_SESSION["counts"][$i]++;
                }
                else //no item - add it to $cart array
                {
                        $_SESSION["cart"][] = $_GET["productID"];
                        $_SESSION["counts"][] = 1;
                }

        }
        
        
        if (isset($_GET["clear_cart"])) //completely clear shopping cart
		{
			//clear cart
			unset($_SESSION["cart"]);
			unset($_SESSION["counts"]);

		}

        if (isset($_GET["remove"]) && $_GET["remove"] > 0) //remove from cart product with productID == $remove
                {
                                $i=0;
                                while ($i<count($_SESSION["cart"]) && $_SESSION["cart"][$i] != $_GET["remove"]) $i++;
                                if ($i<count($_SESSION["cart"])) $_SESSION["cart"][$i] = 0;
                }

        if (isset($_POST["update"])) //update shopping cart content
		{
                        
			$vars = get_defined_vars();
			foreach ($vars["_POST"] as $key => $val) {
                                //echo $key . "=>". $val . "<br>";
				if ($key == "productID")
				{
                                            $q = $vars["_POST"]["count"];
                                            if ( $q > 0 )
                                            {
                                                    for ($i=0; $i<count($_SESSION["cart"]); $i++)
                                                    {
                                                            if ($_SESSION["cart"][$i] == $val )
                                                            {
                                                                    $_SESSION["counts"][$i] = floor($q);
                                                            }
                                                    }
                                            }
                                            else //remove
                                            {
                                                    $i=0;
                                                    while ($_SESSION["cart"][$i] != $key && $i<count($_SESSION["cart"])) $i++;
                                                    $_SESSION["cart"][$i] = 0;
                                            }
                                }
                        }
				  
		}


        // cart items count
        $c = 0;
        if (isset($_SESSION["cart"]))
                for ($j=0; $j<count($_SESSION["cart"]); $j++)
                        if ($_SESSION["cart"][$j]) $c += $_SESSION["counts"][$j];

        //not empty?
        if (isset($_SESSION["cart"]) && $c)
        {
                $k = 0; //total cart value
                $items = array();
                for ($i=0; $i<count($_SESSION["cart"]); $i++)
                  if ($_SESSION["cart"][$i])
                  {
                        include('dbConnectPublic.php');
                        $table = 'products';
                        $query = "SELECT productID, name , description, price,in_stock, thumbnail FROM $table WHERE productID=".$_SESSION["cart"][$i]. ";";

                        $result = $dbh->query($query) ;
                        if ($r = $result->fetch() )
                        {
                                $tmp = array("id"=>$_SESSION["cart"][$i], "productID"=>$r[0], "name"=>$r[1],
                                        "description"=>$r[2], "price"=>$r[3],
                                        "quant"=>$_SESSION['counts'][$i] );

                                $items[] = $tmp;

                                $k += $_SESSION["counts"][$i]*$r[3];
                        }
                  }

                //total...
                $smarty->assign("cart_content", $items);
                $smarty->assign("cart_total", "$k");

             
                
        }
        else
        {
                $smarty->assign("cart_total", "");
        }


        


}
?>