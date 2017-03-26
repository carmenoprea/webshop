<?php
/* Smarty version 3.1.29, created on 2017-03-14 15:47:21
  from "C:\xampp\htdocs\webshop\templates\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58c80279ada841_39751443',
  'file_dependency' => 
  array (
    '5a73458cf65a4f840875e703991a209a8c4ecea0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webshop\\templates\\login.tpl',
      1 => 1489502738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/header.tpl' => 1,
    'file:../templates/footer.tpl' => 1,
  ),
),false)) {
function content_58c80279ada841_39751443 ($_smarty_tpl) {
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
        
        <form method="post" action="index.php?action=login">
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
