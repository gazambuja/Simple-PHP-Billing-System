<script LANGUAGE="JavaScript">
	<!--
	function confirmSubmit(){
	var agree=confirm("Tem certeça que quer eliminar o registro?");
	if (agree)
		return true ;
	else
		return false ;
	}
	// -->
</script>

<h2><?=$a['title']?></h2>

<form name="billing" method="POST" action="<?=$_SERVER["PHP_SELF"]?>">
<input type="hidden" name="load" value="<?=$load?>">
<input type="hidden" name="id" value="<?=$d['value_id']?>">

	<table class="list">
		<thead><tr>
			<th class="left1">Num de NF</th>
			<th>Empresa</th>
			<th>Serviço</th>
			<th>Quant.</th>
			<th>Valor (<?=$a['money']?>)</th>
			<th>Data</th>
			<th>Vencimento</th>
			<th>Pago</th>
			<th>Vendedor</th>
			<th class="right1">Descripção</th>
		</tr></thead>
		<tfoot><tr> 
        	<td colspan="9" class="left2">
				<div class="left">
					<input type="submit" value="<?if($d['value_id']=='') echo "Adicionar"; else echo "Atualizar";?>">&nbsp;&nbsp;
					<?if(!empty($d['value_id'])):?>
					 <input type="submit" name="delete" value="Eliminar" onClick="return confirmSubmit()">
					<?endif;?>
				</div>
				<?if(mselect($d['value_service'], 'freq', 'services')=='1'){?>
				 <div class="right">
					Éste é um pagamento mensual, deseja criar o próximo pagamento? 
					<input type="checkbox" name="sycle" value="1">
				 </div>
				<?}?>
			</td> 
        	<td class="right2">&nbsp;</td> 
        </tr></tfoot>
		<tbody>
		<tr>
			<td><input type="text" name="nf" value="<?=$d['value_nf']?>" size='3'></td>
			<td>
				<select name="company">
				<?foreach ($d['list_company'] as $key => $value){?>
					<option <?=optiond($key, $d['value_company'])?>><?=$value?></option>
				<?}?>
				</select>
			</td>
			<td>
				<select name="service">
				<?foreach ($d['list_service'] as $key => $value){?>
					<option <?=optiond($key, $d['value_service'])?>><?=$value?></option>
				<?}?>
				</select>
			</td>
                        <td><input type="text" name="quantity" value="<?=$d['value_quantity']?>" size='3'></td>
                        <td><input type="text" name="value" value="<?=$d['value_value']?>" size='5'></td>
			<td><input type="text" name="emi_data" value="<?=$d['value_emi_data']?>" size='8'>
				<script language="JavaScript"> new tcal ({ 'formname': 'billing', 'controlname': 'emi_data'	});</script> </td>
			<td><input type="text" name="ven_data" value="<?=$d['value_ven_data']?>" size='8'>
				<script language="JavaScript"> new tcal ({ 'formname': 'billing', 'controlname': 'ven_data'	});</script> </td>
			<td><input type="text" name="pag_data" value="<?=$d['value_pag_data']?>" size='8'>
				<script language="JavaScript"> new tcal ({ 'formname': 'billing', 'controlname': 'pag_data'	});</script> </td>
			<td><select name="seller">
				<?foreach ($d['list_seller'] as $key => $value){?>
					<option <?=optiond($key, $d['value_seller'])?>><?=$value?></option>
				<?}?>
				</select>
			</td>
			<td><input type="text" name="notes" value="<?=$d['value_notes']?>"></td>
		</tr>
		</tbody>
	</table>
	
</form>


