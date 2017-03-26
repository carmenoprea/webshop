<?php
/* Smarty version 3.1.29, created on 2016-04-12 12:05:40
  from "C:\wamp\www\Smarty_voorbeeld\templates\cart.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570cc874cf4e78_26233884',
  'file_dependency' => 
  array (
    '973bd1ff744cf96feca60782e03f8ae9620342b2' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty_voorbeeld\\templates\\cart.tpl',
      1 => 1460455536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570cc874cf4e78_26233884 ($_smarty_tpl) {
?>


<center>

<?php if ($_smarty_tpl->tpl_vars['cart_total']->value != '') {?>
<section class="table table-bordered">
        <div class="container">
	<table class="table table-bordered">
        <tr><td><b>artikel nummer</b></td><td><b>product</b></td><td><b>prijs</b></td><td></td><td><b>aantal</b></td>

	<td align=center><a href="index.php?cart=yes&clear_cart=yes"><img src="images/remove.jpg" border=0 > </a>
        </td></tr>



	<form action="index.php" method=post>

	

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
                <td align=center><input type="text" name="productID" size=3 value="<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID'];?>
" readonly="yes"></td>
                <td><?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
                <td align=center><td>&euro; <?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</td>
		<td align=center><input type="text" name="count" size=5 value="<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['quant'];?>
"></td>
                <td align=center><a href="index.php?cart=yes&remove=<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID'];?>
"><img src="images/remove.jpg" border=0 alt="<?php echo $_smarty_tpl->tpl_vars['cart_content']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['productID'];?>
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
         <td><font class=cat><b>Totaal</b></font></td>
         <td><br><br></td><td></td><td bgcolor="Navyblue" align=left><font class=cat><b>&euro;  <?php echo $_smarty_tpl->tpl_vars['cart_total']->value;?>
</b></font></td>
	 <td></td><td></td>
	 
	</table>

	<input type=hidden name=update value=1>
	<input type=hidden name=shopping_cart value=1>

        <p>
	<table width=75% border=0>
	 <tr><td align=right><input type="submit" value="UPDATE"></td></tr>
	</table>
	</form>

	<form action="index.php" method="post">
            <input type=hidden name="UITCHECKEN" value=yes>
            
		<table width=75% border=0>
		<tr>
		 <td align=center><input type="button" value="TERUG NAAR PRODUCTEN" onClick="history.go(-1);"></td>
		 <td align=center><input type="submit" name="UITCHECKEN" value="UITCHECKEN"></td>
		</table>
	</form>

</div>
</section>

<?php }?>
</center><?php }
}
