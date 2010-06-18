<script LANGUAGE="JavaScript">
        <!--
        function confirmSubmit(){
        var agree=confirm("Tem certeça que deseja duplicar o registro?");
        if (agree)
                return true ;
        else
                return false ;
        }
        // -->
</script>

<h2>Próximos a vencer:</h2>
	<table id="proxvenc" class="list">
		<thead><tr>
			<th class="left1">Acção</th>
			<th>NF</th>
			<th>Cliente</th>
			<th>Serviço</th>
                        <th>Quantidade</th>
			<th>Tipo</th>
			<th>Valor</th>
			<th>Vencimento</th>
			<th>Pago</th>
			<th class="right1">Vendedor</th>
		</tr></thead>
		<tfoot><tr> 
        	<td colspan="9" class="left2"><a href="export.php?load=list_billing"><img src="public/img/save.png" title="Exportar tabela"></a>&nbsp;&nbsp;&nbsp;&nbsp;<em>Lista de NF com vencimento próximo</em></td> 
        	<td class="right2">&nbsp;</td> 
        </tr></tfoot>
		<tbody>
		<?if(!empty($d['values'])){
		 foreach ($d['values'] as $key => $value){?>
			<tr>
				<td><a href="<?=$_SERVER["PHP_SELF"]?>?load=billing&id=<?=$d['values'][$key]['id']?>" >
				 <img src="public/img/edit.png" title="Editar"></a> 
				 <a href="<?=$_SERVER["PHP_SELF"]?>?duplicate=<?=$d['values'][$key]['id']?>" onClick="return confirmSubmit()">
				 <img src="public/img/copy.png" title="Duplicar"></a></td>
				<td><?=$d['values'][$key]['nf']?></td>
				<td><?=$d['values'][$key]['company']?></td>
				<td><?=$d['values'][$key]['service']?></td>
                                <td><?=$d['values'][$key]['quantity']?></td>
				<td><?=$d['values'][$key]['type']?></td>
				<td><div <?if($d['values'][$key]['value']<0) echo 'class="negative"'; else echo 'class="positive"';?>><?=$a['money']?> <?=$d['values'][$key]['value']?></div></td>
				<td><?=$d['values'][$key]['venc']?></td>
				<td><div <?if(strtotime($d['values'][$key]['venc']." 21:00:00") < strtotime(date("d-m-Y H:i:00",time()))) echo 'class="negative"';?>><?=$d['values'][$key]['pago']?></div></td>
				<td><?=$d['values'][$key]['seller']?></td>
			</tr>
		 <?}}?>
		</tbody>
	</table>

<h2>Já pagos: <small>(<a href="?load=list_pay">ver todos</a>)</small></h2>
	<table id="pagos" class="list">
		<thead><tr>
			<th class="left1">Acção</th>
			<th>NF</th>
			<th>Cliente</th>
			<th>Serviço</th>
                        <th>Quantidade</th>
			<th>Tipo</th>
			<th>Valor</th>
			<th>Vencimento</th>
			<th>Pago</th>
			<th class="right1">Vendedor</th>
		</tr></thead>
		<tfoot><tr> 
        	<td colspan="9" class="left2"><a href="export.php?load=list_pay"><img src="public/img/save.png" title="Exportar tabela"></a>&nbsp;&nbsp;&nbsp;&nbsp;<em>Lista de NF já pagas</em></td> 
        	<td class="right2">&nbsp;</td> 
        </tr></tfoot>
		<tbody>
		 <?if(!empty($d['values2'])){
			foreach($d['values2'] as $key => $value){?>
			<tr>
				<td><a href="<?=$_SERVER["PHP_SELF"]?>?load=billing&id=<?=$d['values2'][$key]['id']?>"><img src="public/img/edit.png" title="Editar"></a></td>
				<td><?=$d['values2'][$key]['nf']?></td>
				<td><?=$d['values2'][$key]['company']?></td>
				<td><?=$d['values2'][$key]['service']?></td>
                                <td><?=$d['values2'][$key]['quantity']?></td>
				<td><?=$d['values2'][$key]['type']?></td>
                                <td><div <?if($d['values2'][$key]['value']<0) echo 'class="negative"'; else echo 'class="positive"';?>><?=$a['money']?> <?=$d['values2'][$key]['value']?></div></td>
				<td><?=$d['values2'][$key]['venc']?></td>
				<td><?=$d['values2'][$key]['pago']?></td>
				<td><?=$d['values2'][$key]['seller']?></td>
			</tr>
		 <?}}?>
		</tbody>
	</table>
