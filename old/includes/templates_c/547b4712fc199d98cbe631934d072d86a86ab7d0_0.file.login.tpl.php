<?php
/* Smarty version 3.1.29, created on 2017-01-09 20:07:24
  from "C:\wamp64\www\Smarty_voorbeeld\templates\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5873ed7ca69673_29295574',
  'file_dependency' => 
  array (
    '547b4712fc199d98cbe631934d072d86a86ab7d0' => 
    array (
      0 => 'C:\\wamp64\\www\\Smarty_voorbeeld\\templates\\login.tpl',
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
function content_5873ed7ca69673_29295574 ($_smarty_tpl) {
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
