<?
$a['title']="Lista de Serviços";

$result = mysql_query("SELECT * FROM services");
while($row = mysql_fetch_array($result)){ $x++;
	if($row['freq']=='0') $freq='Unico';
	elseif($row['freq']=='1') $freq='Mensual';
	elseif($row['freq']=='12') $freq='Anual';
	else $freq = "Cada ".$row['freq'] . "meses";
	
	$d['values'][$x][]=$row['name'];
	$d['values'][$x][]=$freq;
	$d['values'][$x][]=$a['money']." ". $row['value'];
	$d['values'][$x][]=$row['notes'];
}

$a['debvar']=$d;
?>
