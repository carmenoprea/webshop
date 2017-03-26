
    <section id="ORDERS">
        <div class="container">
            <table class="table table-bordered">
            <theader>
                
                <th>order </th><th>Detail</th><th>artikel nummer</th><th>product</th> <th>beschrijving</th><th>prijs</th><th>voorraad</th>      
                
            </theader>
            <tbody>
                {foreach $products as $row}
                {strip}
                   <td><a href="index.php?cart=yes&add&productID={$row.productID}">O</a></td>
                   <td><a href="index.php?productDetail&productID={$row.productID}">D</a></td>
                   <td>{$row.productID}<img src="./products_pictures/{$row.thumbnail}" alt="{$row.name}" border=0></td>
                   <td>{$row.name}</td>
                   <td>{$row.description}</td>
                   <td>&euro; {$row.price}</td>
                   
                   <td>{$row.in_stock}</td>
                     
                   </tr>
                {/strip}
                {/foreach}
            </tbody>
            
        </table>
    </section>

