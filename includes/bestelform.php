<?php
if (!isset($_SESSION)) {
    session_start();
    
}
// formulier altijd laten zien

if (isset($_POST['UITCHECKEN'])) {
    echo "Bestelling actie uitchecken  " . $_POST['UITCHECKEN'];
} elseif (isset($_POST['INVOEREN'])) {
    echo "Bestelling actie order plaatsen  " .$_POST['INVOEREN'];
}
// checkout
include_once('functions.php');

if ( isset($_POST['UITCHECKEN'])) {
    
    if (!isset($smarty)) {
    session_start();
    include('../smarty/libs/Smarty.class.php');
    $smarty = new Smarty;
    }
    
      
    // checkout
    // laat de bestellingen zien
    $tmp = array();
    $products = array();
    if ( 1 == 1) {
    // echo "Aantal records = ". count( $_SESSION["cart"]);
        
    for ($i=0; $i<count($_SESSION["cart"]); $i++) {
        
        $k = 0; //total cart value
        
        if ($_SESSION["cart"][$i])
        {
              // Haal product gegevens uit de database
              $q = db_query("SELECT name, Price FROM products WHERE productID='".$_SESSION["cart"][$i]."'");
              // print_r( $q );
              if ($r = array_pop( $q ))
                    {
                    // print_r( $r );
                    //product info
                    $tmp = array('productID'=>$_SESSION["cart"][$i], 'name'=>$r[0], 'aantal'=>$_SESSION["counts"][$i], 'subtotal'=>$_SESSION["counts"][$i]*$r[1] );
                    $products[] = $tmp;
                    
                    //update order amount
                    $k += $_SESSION["counts"][$i]*$r[1];
                }
        }
    }
    
    // toon producten
    if (!empty( $products )) {
        // var_dump( $products);
        $smarty->assign("order_regels", $products);
        $smarty->display('../templates/bestelform.tpl');  
        }
    }
}
    // order invoeren in order tabel
if (isset($_POST["INVOEREN"])) //place order
{
    print("Invoeren van de order <br>");
    

        //shopping cart items count
        $c = 0;
        if (isset($_SESSION["cart"]))
                for ($j=0; $j<count($_SESSION["cart"]); $j++)
                        if ($_SESSION["cart"][$j]) $c += $_SESSION["counts"][$j];

        //not empty?
        if (isset($_SESSION["cart"]) && $c)
        {
                //insert order into database
                
                db_query("insert into orders (order_time, cust_firstname, cust_lastname, cust_email, cust_country, cust_zip, cust_state, cust_city, cust_address, cust_phone) values ('".get_current_time()."','".$_POST["voornaam"]."','".$_POST["achternaam"]."','".$_POST["email"]."','".$_POST["land"]."','".$_POST["postcode"]."','".$_POST["straat"]."','".$_POST["plaats"]."','".$_POST["land"]."','".$_POST["telefoon"]."');");
                
                
                $oid = 1;

                //now move shopping cart content to the database

                $k = 0; //total cart value
                $products = array();
                $adm = ""; //order notification for administrator

                for ($i=0; $i<count($_SESSION["cart"]); $i++)
                  if ($_SESSION["cart"][$i])
                  {
                        $query="SELECT name, Price FROM products WHERE productID='".$_SESSION["cart"][$i]."'";
                        $q = db_query($query);


                        if ($r = array_pop( $q ))
                                {
                                //product info
                                $tmp = array($_SESSION["cart"][$i], $r[0], $_SESSION["counts"][$i], show_price($_SESSION["counts"][$i]*$r[1]));

                                //store ordered products info into database
                                db_query("insert into orders (orderID, productID, name, Price, Quantity) values ('$oid', '".$tmp[0]."', '".$tmp[1]."', '".$r[1]."', '".$tmp[2]."');");

                                $products[] = $tmp;

                                //update order amount
                                $k += $_SESSION["counts"][$i]*$r[3];

                                //order notification for administrator - update
                                $adm .= $tmp[1]." (x".$tmp[2]."): ".$tmp[3]."\n";

                        }
                  }

                
                unset($_SESSION["cart"]);
                unset($_SESSION["counts"]);

                //show order placement result
                header("Location: ../index.php");

        }
        else //empty shopping cart
        {
                // empty shopping cart
                
                header("Location: ../index.php");
                
        }
}

?>