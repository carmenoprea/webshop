{* cart *}

<center>

{if $cart_total ne ""}
<section class="table table-bordered">
        <div class="container">
	<table class="table table-bordered">
        <tr><td><b>artikel nummer</b></td><td><b>product</b></td><td><b>prijs</b></td><td></td><td><b>aantal</b></td>

	<td align=center><a href="index.php?cart=yes&clear_cart=yes"><img src="images/remove.jpg" border=0 > </a>
        </td></tr>



	<form action="index.php" method=post>

	

	 <tr align=center bgcolor=#>
	 <td></td>
	 <td></td>
	 <td width=20></td>
	 </tr>

	 {section loop=$cart_content name=i}
		<tr bgcolor=white>
                <td align=center><input type="text" name="productID" size=3 value="{$cart_content[i].productID}" readonly="yes"></td>
                <td>{$cart_content[i].name}</td>
                <td align=center><td>&euro; {$cart_content[i].price}</td>
		<td align=center><input type="text" name="count" size=5 value="{$cart_content[i].quant}"></td>
                <td align=center><a href="index.php?cart=yes&remove={$cart_content[i].productID}"><img src="images/remove.jpg" border=0 alt="{$cart_content[i].productID}"></a></td>
		</tr>
	 {/section}

	      
         <tr bgcolor=white>
         <td><font class=cat><b>Totaal</b></font></td>
         <td><br><br></td><td></td><td bgcolor="Navyblue" align=left><font class=cat><b>&euro;  {$cart_total}</b></font></td>
	 <td></td><td></td>
	 
	</table>

	<input type=hidden name=update value=1>
	<input type=hidden name=shopping_cart value=1>

        <p>
	<table width=75% border=0>
	 <tr><td align=right><input type="submit" value="UPDATE"></td></tr>
	</table>
	</form>

	<form action="index.php" method="post">
            <input type=hidden name="UITCHECKEN" value=yes>
            
		<table width=75% border=0>
		<tr>
		 <td align=center><input type="button" value="TERUG NAAR PRODUCTEN" onClick="history.go(-1);"></td>
		 <td align=center><input type="submit" name="UITCHECKEN" value="UITCHECKEN"></td>
		</table>
	</form>

</div>
</section>

{/if}
</center>