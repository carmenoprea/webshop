<?php
/* Smarty version 3.1.29, created on 2016-04-03 20:56:02
  from "C:\wamp\www\Smarty_voorbeeld\templates\cart.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57016742d1c697_39593025',
  'file_dependency' => 
  array (
    '973bd1ff744cf96feca60782e03f8ae9620342b2' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty_voorbeeld\\templates\\cart.tpl',
      1 => 1459709759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57016742d1c697_39593025 ($_smarty_tpl) {
?>


<center>

<?php if ($_smarty_tpl->tpl_vars['cart_total']->value != '') {?>

	<table width=75% border=0><tr><td><b>:</b></td>

	<td align=right><a href="index.php?cart=yes"><img src="images/remove.jpg" border=0 > <u></u></a></td></table>



	<form action="index.php" method=post>

	<table width=75% border=0 cellspacing=1 cellpadding=2 bgcolor=#>

	 <tr align=center bgcolor=#>
	 <td></td>
	 <td></td>
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
		 <td align=center><input type="text" name="count_<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID'];?>
" size=5 value="<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
"></td>
		 <td align=center><?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</td>
		 <td align=center><a href="index.php?shopping_cart=yes&remove=<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID'];?>
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
	 <td><font class=cat><b></b></font></td>
	 <td><br><br></td><td bgcolor=# align=center><font class=cat><b><?php echo $_smarty_tpl->tpl_vars['cart_total']->value;?>
</b></font></td>
	 <td></td>
	 </tr>
	</table>

	<input type=hidden name=update value=1>
	<input type=hidden name=shopping_cart value=1>

	<p>
	<table width=75% border=0>
	 <tr><td align=right><input type="submit" value=""></td></tr>
	</table>
	</form>

	<form action="index.php" method=get>
		<table width=75% border=0>
		<tr>
		 <td align=center><input type="button" value="" onClick="history.go(-1);"></td>
		 <td align=center><input type="submit" value=""></td>
		</table>
		<input type=hidden name=order_custinfo value=yes>
	</form>

<?php } else { ?>

<p><font></font>

<?php }?>

</center><?php }
}
