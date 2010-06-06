    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var valores =
          ['ingressos', 'gastos'];
        var months = ['Jan', 'Feb', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];
        var productionByM = [<?=$d['graph']['data']?>];
        // Create and populate the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Month');
        for (var i = 0; i < valores.length; ++i) {
          data.addColumn('number', valores[i]);
        }
        data.addRows(months.length);
        for (var i = 0; i < months.length; ++i) {
          data.setCell(i, 0, months[i]);
        }
        for (var i = 0; i < valores.length; ++i) {
          var country = productionByM[i];
          for (var month = 0; month < months.length; ++month) {
            data.setCell(month, i + 1, country[month]);
          }
        }
        // Create and draw the visualization.
        var ac = new google.visualization.AreaChart(document.getElementById('visualization'));
        ac.draw(data, {
          title : 'Ingressos e Gastos',
          isStacked: false,
          legend: 'none',
          width: 600,
          height: 350
        });
      }

      google.setOnLoadCallback(drawVisualization);
    </script>

<h2>Estadisticas:</h2>

	<div id="visualization" class="graph"></div>​

	<table id="numeros" class="list">
		<thead><tr>
			<th class="left1">Mês</th>
			<th>Ingressos</th>
			<th>Gastos</th>
			<th class="right1">Total</th>
		</tr></thead>
		<tfoot><tr> 
        	<td colspan="3" class="left2"><a href="export.php?load=list_statics"><img src="public/img/save.png" title="Exportar tabela"></a>&nbsp;&nbsp;<em>Lista de Ingressos e Gastos</em></td> 
        	<td class="right2">&nbsp;</td> 
        </tr></tfoot>
		<tbody>
		 <?foreach ($d['values'] as $key => $value){?>
			<tr>
				<td><?=$d['values'][$key]['month']?></td>
				<td><div class="positive"><?=$a['money']?> <?=$d['values'][$key]['in']?></div></td>
				<td><div class="negative"><?=$a['money']?> <?=$d['values'][$key]['out']?></div></td>
                                <td><div <?if($d['values'][$key]['total']<0) echo 'class="negative"'; else echo 'class="positive"';?>><?=$a['money']?> <?=$d['values'][$key]['total']?></div></td>
			</tr>
		 <?}?>
		</tbody>
	</table>
