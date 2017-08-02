<?php
/**
 * Created by PhpStorm.
 * User: bar
 * Date: 8-11-2015
 * Time: 20:22
 */

$user = "root";
$password = "";
$host = "localhost";
$dbname= "webshop";



try {
    $dbh = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    

    // $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
