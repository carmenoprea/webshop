<?php
/* Smarty version 3.1.29, created on 2016-04-15 09:56:29
  from "C:\wamp\www\Smarty_voorbeeld\templates\navigator_top.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57109ead1e34b2_66628252',
  'file_dependency' => 
  array (
    'f7eecea2d6b700cfb494a1a01b801ddbb5757217' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty_voorbeeld\\templates\\navigator_top.tpl',
      1 => 1460706987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57109ead1e34b2_66628252 ($_smarty_tpl) {
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
