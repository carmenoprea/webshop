<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// als afhandeling niet geslaagd
if (!isset($smarty)) {
    session_start();
    $_SESSION['toegang']="false";
    include('../../smarty/libs/Smarty.class.php');
    $login = new Smarty;
    
}else {
// eerste aanroep smarty object bestaat
$login = $smarty;
}

if (!empty($_POST['username']) && $_SESSION['toegang']=='false' ) {
        // functie login();

        $toegang=false;
        include("../includes/dbConnect.php");
        
        $query = "SELECT password FROM $table WHERE " . "email ='" . $_POST["username"] . "';";
        $result = $dbh->prepare( $query );
        $result->execute();
        $r = $result->fetch(PDO::FETCH_ASSOC);
        echo $r['password'] . "<br>";
        if (password_verify( $_POST["password"] , $r['password']) ) {
        // if ( $result->fetchColumn() > 0) {
            $toegang = true;
        }
                       
        
        // test op empty string
        if ( $toegang == true) {
                
                $username = $_POST["username"];
                $wachtwoord = $_POST["password"];

                $_SESSION['username'] = $username;
                $_SESSION['wachtwoord'] = $wachtwoord;
                $_SESSION['toegang'] = "true";
                // header("Location:   ../index.php");
               header("Location:   beveiligd.php");

         }else {
             // hoe achteraf deze tekst plaatsen in een nieuwe sessie
            $_SESSION['toegang '] = "false";
            $_SESSION['logintekst'] = "U hebt geen geldige combinatie van e-mailadres en wachtwoord opgegeven. Maak een keuze: <br>
            <a href=\"login.php\">Opnieuw inloggen</a><br>
            <a href=\"register.php\">Hier registeren</a><br>";
            echo $_SESSION['logintekst'];
     
            
     
        }
}

// scherm login indien nog niet getoond
if ( !isset($_POST['username']) || $_SESSION['toegang']=='false' )  {
     $login->display('../templates/login.tpl');
} 

    

?>
