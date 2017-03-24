<?php
/* Smarty version 3.1.29, created on 2016-04-04 23:14:27
  from "C:\wamp\www\Smarty_voorbeeld\templates\footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5702d93326c716_58571392',
  'file_dependency' => 
  array (
    'a75de2e9872a28a366e0673ca4e39dfb7a9d6f48' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty_voorbeeld\\templates\\footer.tpl',
      1 => 1459804246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5702d93326c716_58571392 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp\\www\\smarty\\libs\\plugins\\modifier.date_format.php';
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
