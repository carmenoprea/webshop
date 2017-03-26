<?php
/**
 * Created by PhpStorm.
 * User: bar
 * Date: 8-11-2015
 * Time: 20:22
 */

$user = "web";
$password = "web123";
$host = "localhost";
$database= "webshop";
//$table = "users";
//$query = "SELECT * from $table;";


try {
    $dbh = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    

    // $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}