<?php
/* Smarty version 3.1.29, created on 2017-02-24 01:22:43
  from "C:\xampp\htdocs\webshop\templates\footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58af7cd3866a65_41559826',
  'file_dependency' => 
  array (
    '4557d26f59012bd6334ca65436c857e55aef9ca3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webshop\\templates\\footer.tpl',
      1 => 1487895761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58af7cd3866a65_41559826 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\webshop\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  PC World <br>
  Rotterdam <br>
Date: <?php echo smarty_modifier_date_format(time(),"%b %e, %Y");?>
 <br>
  <p>PC World <a href="https://www.deheldenvantechniek.nl/" title="Helden van techniek">https://www.deheldenvantechniek.nl/</a></p>
</footer>

<?php }
}
