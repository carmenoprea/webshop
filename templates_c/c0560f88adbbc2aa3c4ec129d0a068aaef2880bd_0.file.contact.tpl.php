<?php
/* Smarty version 3.1.29, created on 2017-01-08 21:11:40
  from "C:\wamp64\www\Smarty_voorbeeld\templates\contact.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5872ab0cce3856_98029082',
  'file_dependency' => 
  array (
    'c0560f88adbbc2aa3c4ec129d0a068aaef2880bd' => 
    array (
      0 => 'C:\\wamp64\\www\\Smarty_voorbeeld\\templates\\contact.tpl',
      1 => 1459804152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5872ab0cce3856_98029082 ($_smarty_tpl) {
?>

<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Rotterdam, NL</p>
      <p><span class="glyphicon glyphicon-phone"></span> +031 010 443 31 50</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p> 
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- Set height and width with CSS -->
<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps --><?php }
}
