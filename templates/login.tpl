<html>
<head>
<title>Webshop login </title>

{include file="../templates/header.tpl" title="werknemers"  username='gast'}
</head>
    <body>
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
        
        <form method="post" action="login.php">
            <fieldset class="panel-heading">
            <input type="text" name="username" required="yes" placeholder="username">
            <input type="password" name="password" required="yes" placeholder="wachtwoord">
            <input type="submit" name="submit" value="voerin">
            </fieldset>
        </form>

        <p>{$tekst|default:""}<p>
        </div>
      </div>
    </div>
  </div>

 
    </body>
    {include file="../templates/footer.tpl"}
</html>
