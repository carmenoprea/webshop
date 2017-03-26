<?php
/* Smarty version 3.1.29, created on 2016-03-23 23:29:55
  from "C:\wamp\www\Smarty_startup\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f318e3911749_64360782',
  'file_dependency' => 
  array (
    '3395122d9f6253890c7b902c37f5f058429d1067' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty_startup\\index.tpl',
      1 => 1458772192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_56f318e3911749_64360782 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'C:\\wamp\\www\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp\\www\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_html_options')) require_once 'C:\\wamp\\www\\smarty\\libs\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_cycle')) require_once 'C:\\wamp\\www\\smarty\\libs\\plugins\\function.cycle.php';
?>
<html>
<head>
<title>Info</title>
</head>
<body>
    
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Info"), 0, false);
?>


<pre>
User Information:

Name: <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>

Addr: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value, ENT_QUOTES, 'UTF-8', true);?>

Date: <?php echo smarty_modifier_date_format(time(),"%b %e, %Y");?>

</pre>

<select name=user>
<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['id']->value,'output'=>$_smarty_tpl->tpl_vars['names']->value,'selected'=>"5"),$_smarty_tpl);?>

</select>

<table>
<?php
$_from = $_smarty_tpl->tpl_vars['names']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_name_0_saved_item = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['name']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
$__foreach_name_0_saved_local_item = $_smarty_tpl->tpl_vars['name'];
?>
<tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#eeeeee,#dddddd"),$_smarty_tpl);?>
"> <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td> </tr>
<?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_0_saved_local_item;
}
if ($__foreach_name_0_saved_item) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_0_saved_item;
}
?>
</table>

<table>
<?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_1_saved_item = isset($_smarty_tpl->tpl_vars['user']) ? $_smarty_tpl->tpl_vars['user'] : false;
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$__foreach_user_1_saved_local_item = $_smarty_tpl->tpl_vars['user'];
?>
<tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#aaaaaa,#bbbbbb"),$_smarty_tpl);?>
"> <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
</td> </tr>
<?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_1_saved_local_item;
}
if ($__foreach_user_1_saved_item) {
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_1_saved_item;
}
?>
</table>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



</body>
</html>
<?php }
}
