<?php
/* Smarty version 3.1.29, created on 2016-04-03 22:56:45
  from "C:\wamp\www\Smarty_voorbeeld\templates\member.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5701838daae3b7_19552985',
  'file_dependency' => 
  array (
    'a2f8c55b1166a78b80ac89bafc23f73c45867c9d' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty_voorbeeld\\templates\\member.tpl',
      1 => 1459716991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/header.tpl' => 1,
    'file:../templates/footer.tpl' => 1,
  ),
),false)) {
function content_5701838daae3b7_19552985 ($_smarty_tpl) {
?>
<html>
    
<head>
 <title>Zadkine werknemers overzicht</title>
 <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"werknemers",'username'=>$_smarty_tpl->tpl_vars['username']->value), 0, false);
?>
       


<body>

    <section>
        <div class="container">
            <table class="table table-bordered">
            <theader>
                
               <th> wijzig </th><th> voornaam </th> <th> achternaam </th><th> kamer</th><th> telefoon</th>      
                
            </theader>
            <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
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
                <td><a href="modmember.php?voornaam=<?php echo $_smarty_tpl->tpl_vars['row']->value['voornaam'];?>
&achternaam=<?php echo $_smarty_tpl->tpl_vars['row']->value['achternaam'];?>
">w</a></td> <td><?php echo $_smarty_tpl->tpl_vars['row']->value['voornaam'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['row']->value['achternaam'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['row']->value['kamer'];?>
</td> <td><?php echo $_smarty_tpl->tpl_vars['row']->value['toestel'];?>
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
 </body>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<footer>
<a href="reportPdf.php"> REPORT in PDF </a>


</footer>
</html><?php }
}
