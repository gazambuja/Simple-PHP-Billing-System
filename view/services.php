<h2><?=$a['title']?></h2>

<form method="POST" action="<?=$_SERVER["PHP_SELF"]?>">
<input type="hidden" name="load" value="<?=$load?>">

	<table class="list">
		<thead><tr>
			<th class="left1">Nome</th>
			<th>Frequência</th>
			<th>Valor</th>
			<th class="right1">Descripção</th>
		</tr></thead>
		<tfoot><tr> 
        	<td colspan="3" class="left2"><input type="submit" value="Adicionar"></td> 
        	<td class="right2">&nbsp;</td> 
        </tr></tfoot>
		<tbody>
		<tr>
			<td><input type="text" name="name" value="<?=$d['value_name']?>"></td>
			<td>
			<select name="freq">
				<option <?=optiond('0', $d['value_freq'])?>>Unico</option>
				<option <?=optiond('1', $d['value_freq'])?>>Mensual</option>
				<option <?=optiond('2', $d['value_freq'])?>>Cada 2 meses</option>
				<option <?=optiond('6', $d['value_freq'])?>>Cada 6 meses</option>
				<option <?=optiond('12', $d['value_freq'])?>>Anual</option>
			</select>
			</td>
			<td><input type="text" name="value" value="<?=$d['value_value']?>"></td>
			<td><input type="text" name="notes" value="<?=$d['value_notes']?>"></td>
		</tr>
		</tbody>
	</table>
	
</form>

