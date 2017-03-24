<?php
/* Smarty version 3.1.29, created on 2017-01-08 21:11:40
  from "C:\wamp64\www\Smarty_voorbeeld\templates\navigator_top.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5872ab0cd83e90_23448541',
  'file_dependency' => 
  array (
    '21604b2761712392a0a2dd3901984302cfbdd277' => 
    array (
      0 => 'C:\\wamp64\\www\\Smarty_voorbeeld\\templates\\navigator_top.tpl',
      1 => 1460706987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5872ab0cd83e90_23448541 ($_smarty_tpl) {
?>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
     <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">Logo</a>
      
     </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
         <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#prijzen">PRIJZEN</a></li>
        <li><a href="./includes/bestelOverzicht.php">BESTELLINGEN</a></li>
        <li><a href="#PRODUCTS">PRODUCTS</a></li>
        
        <li><a href="./includes/login.php">WERKNEMERS</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
     </div>
  </div>
</nav>
<?php }
}
