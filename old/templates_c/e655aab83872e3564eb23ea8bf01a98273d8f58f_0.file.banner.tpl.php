<?php
/* Smarty version 3.1.29, created on 2017-03-14 15:30:08
  from "C:\xampp\htdocs\webshop\templates\banner.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58c7fe701bb719_49951516',
  'file_dependency' => 
  array (
    'e655aab83872e3564eb23ea8bf01a98273d8f58f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webshop\\templates\\banner.tpl',
      1 => 1489497358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/templates/login.tpl' => 1,
  ),
),false)) {
function content_58c7fe701bb719_49951516 ($_smarty_tpl) {
?>
<div class="jumbotron">
  <h1>PC World</h1>
  <p>We specialize in computer solutions</p>
  <form class="form-inline">
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Subscribe</button>
  </form>

  <?php if ($_smarty_tpl->tpl_vars['showLogin']->value) {?>
      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:/templates/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php }?>

</div>
<?php }
}
