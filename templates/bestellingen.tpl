<!DOCTYPE html>
{include file="../templates/header.tpl" title="Webshop"  username='web'}
{include 'functions.php'}
{include file="../templates/header.tpl" title="Webform order plaatsen"  username='klant'}




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
                {foreach $orders as $row}
                {strip}
                   <td>{$row.voornaam}</td>
                   <td>{$row.achternaam}</td>
                   <td>{$row.email}</td>
                   <td>{$row.orderid}</td>
                   <td>{$row.productid1}</td>
                   <td>{$row.productaantal1}</td>
                   
                  
                   </tr>
                {/strip}
                {/foreach}
            </tbody>
            
        </table>
    </section>

</body>
{include file="../templates/footer.tpl"}
</html>