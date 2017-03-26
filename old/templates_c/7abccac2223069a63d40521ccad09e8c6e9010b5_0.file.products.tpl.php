<?php
/* Smarty version 3.1.29, created on 2017-01-08 21:11:40
  from "C:\wamp64\www\Smarty_voorbeeld\templates\products.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5872ab0cacd383_66256258',
  'file_dependency' => 
  array (
    '7abccac2223069a63d40521ccad09e8c6e9010b5' => 
    array (
      0 => 'C:\\wamp64\\www\\Smarty_voorbeeld\\templates\\products.tpl',
      1 => 1460124946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5872ab0cacd383_66256258 ($_smarty_tpl) {
?>

    <section id="PRODUCTS">
        <div class="container">
            <table class="table table-bordered">
            <theader>
                
                <th>order </th><th>Detail</th><th>artikel nummer</th><th>product</th> <th>beschrijving</th><th>prijs</th><th>voorraad</th>      
                
            </theader>
            <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
                <td><a href="index.php?cart=yes&add&productID=<?php echo $_smarty_tpl->tpl_vars['row']->value['productID'];?>
">O</a></td> <td><a href="index.php?productDetail&productID=<?php echo $_smarty_tpl->tpl_vars['row']->value['productID'];?>
">D</a></td> <td><?php echo $_smarty_tpl->tpl_vars['row']->value['productID'];?>
<img src="./products_pictures/<?php echo $_smarty_tpl->tpl_vars['row']->value['thumbnail'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" border=0></td> <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</td> <td>&euro; <?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['row']->value['in_stock'];?>
</td> </tr>
                <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
            </tbody>
            
        </table>
    </section>

<?php }
}
