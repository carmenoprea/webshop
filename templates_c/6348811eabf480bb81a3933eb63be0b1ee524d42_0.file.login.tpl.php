<?php
/* Smarty version 3.1.29, created on 2016-03-25 12:56:57
  from "C:\wamp\www\Smarty_voorbeeld\templates\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f52789dee025_49988268',
  'file_dependency' => 
  array (
    '6348811eabf480bb81a3933eb63be0b1ee524d42' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty_voorbeeld\\templates\\login.tpl',
      1 => 1458907001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f52789dee025_49988268 ($_smarty_tpl) {
?>
<html>
<head>
<title>Webshop login </title>
</head>
    <body>
    
        
    <form method="post" action="login.php">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" name="submit" value="voerin">

    </form>
        <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tekst']->value)===null||$tmp==='' ? '' : $tmp);?>
<p>

    


    </body>
</html>
<?php }
}
