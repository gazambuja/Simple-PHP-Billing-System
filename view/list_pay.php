<h2>Já pagos:</h2>
	<table class="list">
		<thead><tr>
			<th class="left1">Acção</th>
			<th>NF</th>
			<th>Cliente</th>
			<th>Serviço</th>
			<th>Tipo</th>
			<th>Valor</th>
			<th>Vencimento</th>
			<th>Pago</th>
			<th class="right1">Vendedor</th>
		</tr></thead>
		<tfoot><tr> 
        	<td colspan="8" class="left2"><a href="export.php?load=list_pay"><img src="public/img/save.png" title="Exportar"></a>&nbsp;&nbsp;&nbsp;&nbsp;<em>Lista de NF já pagas</em></td> 
        	<td class="right2">&nbsp;</td> 
        </tr></tfoot>
		<tbody>
		 <?if(!empty($d['values2'])){
			foreach ($d['values2'] as $key => $value){?>
			<tr>
				<td><a href="<?=$_SERVER["PHP_SELF"]?>?load=billing&id=<?=$d['values2'][$key]['id']?>"><img src="public/img/edit.png" title="Editar"></a></td>
				<td><?=$d['values2'][$key]['nf']?></td>
				<td><?=$d['values2'][$key]['company']?></td>
				<td><?=$d['values2'][$key]['service']?></td>
				<td><?=$d['values2'][$key]['type']?></td>
                                <td><div <?if($d['values2'][$key]['value']<0) echo 'class="negative"'; else echo 'class="positive"';?>><?=$a['money']?> <?=$d['values2'][$key]['value']?></div></td>
				<td><?=$d['values2'][$key]['venc']?></td>
				<td><?=$d['values2'][$key]['pago']?></td>
				<td><?=$d['values2'][$key]['seller']?></td>
			</tr>
		 <?}}?>
		</tbody>
	</table>
