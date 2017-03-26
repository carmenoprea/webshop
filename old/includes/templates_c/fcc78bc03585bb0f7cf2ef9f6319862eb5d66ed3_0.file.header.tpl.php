<?php
/* Smarty version 3.1.29, created on 2016-04-04 13:56:07
  from "C:\wamp\www\Smarty_voorbeeld\templates\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57025657b04178_23764272',
  'file_dependency' => 
  array (
    'fcc78bc03585bb0f7cf2ef9f6319862eb5d66ed3' => 
    array (
      0 => 'C:\\wamp\\www\\Smarty_voorbeeld\\templates\\header.tpl',
      1 => 1459770943,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57025657b04178_23764272 ($_smarty_tpl) {
?>

<html>
<head>
<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? "no title" : $tmp);?>
</title>

        U bent nu aangemeld als :  <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 <br>
 
  <title>Webshop 2016</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/main.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  
  <?php echo '<script'; ?>
>
    $(document).ready(function(){
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

      // Prevent default anchor click behavior
      // bakker 2016 Why? <a won't work
      // event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
         scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
         window.location.hash = hash;
        });
      });
      })
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      $(window).scroll(function() {
      $(".slideanim").each(function(){
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
      });
      });

    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://maps.googleapis.com/maps/api/js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    //var myCenter = new google.maps.LatLng(41.878114, -87.629798);
    var myCenter = new google.maps.LatLng(51.905295, 4.496494);

    function initialize() {
    var mapProp = {
    center:myCenter,
    zoom:12,
    scrollwheel:false,
    draggable:false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

    var marker = new google.maps.Marker({
    position:myCenter,
    });

    marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
<?php echo '</script'; ?>
>

    

</head>   
        
</head>
        
        
      
<?php }
}
