<?php
/* Smarty version 3.1.29, created on 2016-04-02 17:41:20
  from "C:\wamp\www\Smarty_voorbeeld\templates\shopping_cart.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56ffe82011e092_20985891',
  'file_dependency' => 
  array (
    'abdd11e48f08b659c00fb1b7fe16ec3ff6e2e0ed' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty_voorbeeld\\templates\\shopping_cart.tpl',
      1 => 1458938044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56ffe82011e092_20985891 ($_smarty_tpl) {
?>


<center>

<?php if ($_smarty_tpl->tpl_vars['cart_total']->value != '') {?>

	<table width=75% border=0><tr><td><b><?php echo @constant('CART_TITLE');?>
:</b></td>

	<td align=right><a href="index.php?shopping_cart=yes&clear_cart=yes"><img src="images/remove.jpg" border=0 > <u><?php echo @constant('CART_CLEAR');?>
</u></a></td></table>



	<form action="index.php" method=post>

	<table width=75% border=0 cellspacing=1 cellpadding=2 bgcolor=#<?php echo @constant('CONF_DARK_COLOR');?>
>

	 <tr align=center bgcolor=#<?php echo @constant('CONF_MIDDLE_COLOR');?>
>
	 <td><?php echo @constant('TABLE_PRODUCT_NAME');?>
</td>
	 <td><?php echo @constant('TABLE_PRODUCT_QUANTITY');?>
</td>
	 <td><?php echo @constant('TABLE_PRODUCT_COST');?>
, <?php echo $_smarty_tpl->tpl_vars['currency_name']->value;?>
</td>
	 <td width=20></td>
	 </tr>

	 <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cart_content']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
		<tr bgcolor=white>
		 <td><?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
		 <td align=center><input type="text" name="count_<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" size=5 value="<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['quantity'];?>
"></td>
		 <td align=center><?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cost'];?>
</td>
		 <td align=center><a href="index.php?shopping_cart=yes&remove=<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><img src="images/remove.jpg" border=0 alt="<?php echo @constant('DELETE_BUTTON');?>
"></a></td>
		</tr>
	 <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>

	 <tr bgcolor=white>
	 <td><font class=cat><b><?php echo @constant('TABLE_TOTAL');?>
</b></font></td>
	 <td><br><br></td><td bgcolor=#<?php echo @constant('CONF_LIGHT_COLOR');?>
 align=center><font class=cat><b><?php echo $_smarty_tpl->tpl_vars['cart_total']->value;?>
</b></font></td>
	 <td></td>
	 </tr>
	</table>

	<input type=hidden name=update value=1>
	<input type=hidden name=shopping_cart value=1>

	<p>
	<table width=75% border=0>
	 <tr><td align=right><input type="submit" value="<?php echo @constant('UPDATE_BUTTON');?>
"></td></tr>
	</table>
	</form>

	<form action="index.php" method=get>
		<table width=75% border=0>
		<tr>
		 <td align=center><input type="button" value="<?php echo @constant('STRING_BACK_TO_SHOPPING');?>
" onClick="history.go(-1);"></td>
		 <td align=center><input type="submit" value="<?php echo @constant('CART_PROCEED_TO_CHECKOUT');?>
"></td>
		</table>
		<input type=hidden name=order_custinfo value=yes>
	</form>

<?php } else { ?>

<p><font><?php echo @constant('CART_EMPTY');?>
</font>

<?php }?>

</center><?php }
}
