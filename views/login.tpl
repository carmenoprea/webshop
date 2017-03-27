<html>
<head>
<title>Webshop login </title>

{include file="header.tpl" title="werknemers"  username='gast'}
</head>
<body>
<div class="row">
    <div class="col-sm-4">
        <div class="panel panel-default text-center">
            <div class="panel-heading">

                {if isset($errors)}
                    <ul>
                    {foreach $errors as $field => $error}
                        <li>{ucfirst($field)}: {$error}</li>
                    {/foreach}
                    </ul>
                {/if}

                <form method="post" action="/login">
                    <fieldset class="panel-heading">
                        <input type="text" name="username" required="yes" placeholder="Username">
                        <input type="password" name="password" required="yes" placeholder="Wachtwoord">
                        <br />
                        Remember me <input type="checkbox" name="remember" value="1"/>
                        <input type="hidden" name="remember" value="0"/>
                        <br />
                    </fieldset>

                    <input type="submit" name="submit" value="Login">
                </form>

                <p>{$tekst|default:""}<p>
            </div>
        </div>
    </div>
</div>


</body>
{include file="footer.tpl"}
</html>
