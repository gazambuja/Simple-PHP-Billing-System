	<table class="list">
		<thead><tr>
			<th scope="col" class="left1">Nome</th>
			<th scope="col">Endereço</th>
			<th scope="col">Tel</th>
			<th scope="col">email</th>
			<th scope="col">CNPJ</th>
			<th scope="col" class="right1">CRM</th>
		</tr></thead>
		<tfoot><tr> 
        	<td colspan="5" class="left2"><em>Lista de empresas disponíveis</em></td> 
        	<td class="right2">&nbsp;</td> 
        </tr></tfoot>

		<tbody>
		 <?foreach ($d['values'] as $key => $value){
			echo "<tr>";
			foreach ($d['values'][$key] as $k => $v){
				if($k==5) echo "<td><a target=_blank href='$v'><img src='public/img/link.png' title='Abrir CRM'></a></td>";
			    else echo "<td>$v</td>";
			}
			echo "</tr>";
		 }?>
		</tbody>
	</table>
