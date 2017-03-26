<?php
/* Smarty version 3.1.29, created on 2017-03-14 16:40:06
  from "C:\xampp\htdocs\webshop\includes\functions.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58c80ed6aad530_26578027',
  'file_dependency' => 
  array (
    '5fc61415a6ef2fde872632e90864d782372f51ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webshop\\includes\\functions.php',
      1 => 1489503001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c80ed6aad530_26578027 ($_smarty_tpl) {
echo '<?php
';?>/**
 * Created by PhpStorm.
 * User: bar
 * Date: 8-11-2015
 * Time: 21:06
 */
function Dispatch() {

    global $smarty;

    // Dispatch();
    if ( $_SESSION['toegang'] == true) {
        $smarty->assign("showLogin", false);
    }else{
        $smarty->assign("showLogin", true);
    }

    if ( ($_GET['action'] == 'login') && ($_SESSION['toegang'] == false )) {
        $_SESSION['toegang'] = login();
    }


}


function login()
{


    /**
     * Created by PhpStorm.
     * User: bar
     * Date: 8-11-2015
     * Time: 20:14
     */
    include('dbConnect.php');

    // vars
    // deze zijn leeg
    global $toegang;

    // global $email, $password;
    // WTF

    $email = $_POST['username'];
    $password = $_POST['password'];

    //
    $query = "SELECT * from users WHERE email='$email' AND password='$password'";


    try {

        $queryResult = $dbh->prepare($query);
        $queryResult-> execute();

        if ($row = $queryResult->fetch()) {
            $toegang = true;
            $_SESSION["toegang"] = "true";

            // echo " Access true = " . $toegang;

        } else {

            $toegang = false;
            // echo " Access false = " . $toegang;

        }
        unset($dbh);
        unset($queryResult);
    } catch (PDOException  $e) {
        echo "database Error " . $e;
    }

    return $toegang;
} // end function login()


function add2cart($id)
{
    include('dbConnectPublic.php');
    $table = 'products';
    $query = "SELECT productID, name , description, price,in_stock FROM $table WHERE productID='$id';";

    $result = $dbh->query($query);
    return $result;
}


function getProducts()
{

    $table = 'products';
    $query = "SELECT productID, name , description, price,in_stock, thumbnail FROM $table WHERE enabled=1;";
    return db_query($query);

}

function overzichtWerknemers()
{
    $table = 'werknemers';
    $query = "SELECT * FROM $table;";
    return db_query($query);
}

function overzichtBestellingen()
{
    $table = 'orders';
    $query = "SELECT * FROM $table;";
    return db_query($query);
}


function db_query($sqlQuery)
{
    include('dbConnectPublic.php');

    $resultArray = array();

    if ($row = $dbh->query($sqlQuery)) {
        // maak er een associatieve array van
        while ($r = $row->fetch()) {
            array_push($resultArray, $r);
        }
    }
    return $resultArray;

}


function getOrders()
{

    if ($filestream = fopen('../overzichtWerknemers.txt', 'r')) {
        $rn = 1;
        while (($data = fgetcsv($filestream, 1000, ",")) !== FALSE) {
            $num = count($data);
            echo "<p> $num fields in line $rn: <br /></p>\n";
            $rn++;
            for ($c = 0; $c < $num; $c++) {
                echo $data[$c];
            }
            echo "<br>";


        }
    }
    /*
    $table = 'orderregels';

    $query = "SELECT voornaam, achternaam,postcode, telefoon, email, orderid, productid1, productaantal1  FROM $table;";
    return  db_query($query);
    */

}


function show_price($productID)
{
    include('dbConnectPublic.php');
    $table = 'products';
    $price = 0;
    $query = "SELECT price FROM products WHERE productID=$productID";
    if ($row = $dbh->query($query)) {
        // maak er een associatieve array van
        while ($r = $row->fetch()) {
            $price = $r['price'];

        }
    }
    return $price;

}

function get_current_time() //get current date and time as a string
//required to do INSERT queries of DATETIME/TIMESTAMP in different DBMSes
{
    $timestamp = time();
    $s = strftime("%Y-%m-%d %H:%M:%S", $timestamp);
    return $s;
}

<?php echo '?>';?>


<?php }
}
