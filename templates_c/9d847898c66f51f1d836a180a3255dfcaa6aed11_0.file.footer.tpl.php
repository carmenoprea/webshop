<?php
/* Smarty version 3.1.29, created on 2017-01-09 20:54:30
  from "C:\wamp64\www\Webshop_2017_framework\templates\footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5873f886b736e2_12472209',
  'file_dependency' => 
  array (
    '9d847898c66f51f1d836a180a3255dfcaa6aed11' => 
    array (
      0 => 'C:\\wamp64\\www\\Webshop_2017_framework\\templates\\footer.tpl',
      1 => 1459804246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5873f886b736e2_12472209 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp64\\www\\Webshop_2017_framework\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
    User Information:

Name: Zadkine <br>
Addr: ROC Hogeschool <br>
Date: <?php echo smarty_modifier_date_format(time(),"%b %e, %Y");?>
 <br>
  <p>Roc Zadkine <a href="https://www.deheldenvantechniek.nl/" title="Helden van techniek">https://www.deheldenvantechniek.nl/</a></p> 
</footer>

<?php }
}
