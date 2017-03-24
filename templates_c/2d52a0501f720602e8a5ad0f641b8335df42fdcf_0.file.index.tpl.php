<?php
/* Smarty version 3.1.29, created on 2016-03-24 17:18:29
  from "C:\wamp\www\Smarty_voorbeeld\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f413557757c3_60030994',
  'file_dependency' => 
  array (
    '2d52a0501f720602e8a5ad0f641b8335df42fdcf' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty_voorbeeld\\templates\\index.tpl',
      1 => 1458826872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_56f413557757c3_60030994 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'C:\\wamp\\www\\smarty\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_capitalize')) require_once 'C:\\wamp\\www\\smarty\\libs\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp\\www\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_html_options')) require_once 'C:\\wamp\\www\\smarty\\libs\\plugins\\function.html_options.php';
?>
<html>
<head>
<title>Webshop Info</title>
</head>
<body>
    
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Info"), 0, false);
?>


<pre>
<main>
    <section classs="personalinfo">
        
        <table>
        <?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_0_saved_item = isset($_smarty_tpl->tpl_vars['user']) ? $_smarty_tpl->tpl_vars['user'] : false;
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$__foreach_user_0_saved_local_item = $_smarty_tpl->tpl_vars['user'];
?>
        <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#aaaaaa,#bbbbbb"),$_smarty_tpl);?>
"> <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
</td> </tr>
        <?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_local_item;
}
if ($__foreach_user_0_saved_item) {
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_item;
}
?>
        </table>

    </section>

    <section>
        <div class="produkten">
            <theader>
                <th> Naam </th><th> telefoon</th>      
            </theader>
            <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['names']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_name_1_saved_item = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['name']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
$__foreach_name_1_saved_local_item = $_smarty_tpl->tpl_vars['name'];
?>
                <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#eeeeee,#dddddd"),$_smarty_tpl);?>
"> <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td> </tr>
                <?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_1_saved_local_item;
}
if ($__foreach_name_1_saved_item) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_1_saved_item;
}
?>
            </tbody>
            
            
            
        </div>
        
        
    </section>
    </main>
    
</main>
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
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_2_saved_item = isset($_smarty_tpl->tpl_vars['user']) ? $_smarty_tpl->tpl_vars['user'] : false;
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$__foreach_user_2_saved_local_item = $_smarty_tpl->tpl_vars['user'];
?>
<tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#aaaaaa,#bbbbbb"),$_smarty_tpl);?>
"> <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
</td> </tr>
<?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_2_saved_local_item;
}
if ($__foreach_user_2_saved_item) {
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_2_saved_item;
}
?>
</table>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



</body>
</html>
<?php }
}
