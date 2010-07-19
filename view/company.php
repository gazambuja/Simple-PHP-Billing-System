<h2><?=$a['title']?></h2>

<form method="POST" action="<?=$_SERVER["PHP_SELF"]?>">
<input type="hidden" name="load" value="<?=$load?>">

	<table class="list">
		<thead><tr>
			<th class="left1">Nome</th>
			<th>Endereço</th>
			<th>Tel</th>
			<th>email</th>
			<th>CNPJ</th>
			<th class="right1">CRM (link)</th>
		</tr></thead>
		<tfoot><tr> 
        	<td colspan="5" class="left2"><input type="submit" value="Adicionar"></td> 
        	<td class="right2">&nbsp;</td> 
        </tr></tfoot>
		<tbody><tr>
			<td><input type="text" name="name" value="<?=$d['value_name']?>"></td>
			<td><input type="text" name="address" value="<?=$d['value_address']?>"></td>
			<td><input type="text" name="tel" value="<?=$d['value_tel']?>"></td>
			<td><input type="text" name="email" value="<?=$d['value_email']?>"></td>
			<td><input type="text" name="notes" value="<?=$d['value_notes']?>"></td>
			<td><input type="text" name="crm" value="<?=$d['value_crm']?>"></td>
		</tr>
		</tbody>
	</table>
	
</form>
