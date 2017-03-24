<?php
/* Smarty version 3.1.29, created on 2017-01-09 21:37:51
  from "C:\wamp64\www\Webshop_2017_framework\templates\bestellingen.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_587402afaed789_02167512',
  'file_dependency' => 
  array (
    'a4c30752f7c0b8f97ab8368dede523e4bc232c99' => 
    array (
      0 => 'C:\\wamp64\\www\\Webshop_2017_framework\\templates\\bestellingen.tpl',
      1 => 1483997868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/header.tpl' => 1,
  ),
),false)) {
function content_587402afaed789_02167512 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Webshop",'username'=>'bezoeker'), 0, false);
?>
 
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Bakker 2016

-->


<body id="Webshop" data-spy="scroll" data-target=".navbar" data-offset="60">
  
    <section id="ORDERS">
        <div class="container">
            <table class="table table-bordered">
            <theader>
                
                <th>voornaam</th><th>achternaam</th><th>email</th><th>orderid </th><th>product ID</th><th>aantal</th>      
                
            </theader>
            <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['orders']->value;
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
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['voornaam'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['row']->value['achternaam'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['row']->value['orderid'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['row']->value['productid1'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['row']->value['productaantal1'];?>
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

</body>
</html><?php }
}
