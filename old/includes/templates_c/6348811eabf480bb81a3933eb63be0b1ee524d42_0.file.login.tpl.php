<?php
/* Smarty version 3.1.29, created on 2016-03-28 12:15:35
  from "C:\wamp\www\Smarty_voorbeeld\templates\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f90447796118_08944106',
  'file_dependency' => 
  array (
    '6348811eabf480bb81a3933eb63be0b1ee524d42' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty_voorbeeld\\templates\\login.tpl',
      1 => 1459160125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/header.tpl' => 1,
    'file:../templates/footer.tpl' => 1,
  ),
),false)) {
function content_56f90447796118_08944106 ($_smarty_tpl) {
?>
<html>
<head>
<title>Webshop login </title>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"werknemers",'username'=>'gast'), 0, false);
?>

</head>
    <body>
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
        
        <form method="post" action="login.php">
            <fieldset class="panel-heading">
            <input type="text" name="username" required="yes" placeholder="username">
            <input type="password" name="password" required="yes" placeholder="wachtwoord">
            <input type="submit" name="submit" value="voerin">
            </fieldset>
        </form>

        <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tekst']->value)===null||$tmp==='' ? '' : $tmp);?>
<p>
        </div>
      </div>
    </div>
  </div>

 
    </body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</html>
<?php }
}
