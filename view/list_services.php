	<table class="list">
		<thead><tr>
			<th scope="col" class="left1">Nome</th>
			<th scope="col">Frequência</th>
			<th scope="col">Valor</th>
			<th scope="col" class="right1">Descripção</th>
		</tr></thead>
		<tfoot><tr> 
        	<td colspan="3" class="left2"><em>Lista de serviços disponíveis</em></td> 
        	<td class="right2">&nbsp;</td> 
        </tr></tfoot>

		<tbody>
		 <?foreach ($d['values'] as $key => $value){
			echo "<tr>";
			foreach ($d['values'][$key] as $k => $v){
					echo "<td>$v</td>";
			}
			echo "</tr>";
		 }?>
		</tbody>
	</table>
