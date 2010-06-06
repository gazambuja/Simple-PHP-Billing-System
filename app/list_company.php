<?
$a['title']="Lista de Empresas";

$result = mysql_query("SELECT * FROM companys");
while($row = mysql_fetch_array($result)){ $x++;
	
	$d['values'][$x][]=$row['name'];
	$d['values'][$x][]=$row['address'];
	$d['values'][$x][]=$row['tel'];
	$d['values'][$x][]=$row['email'];
	$d['values'][$x][]=$row['notes'];
	$d['values'][$x][]=$row['crm'];
}

$a['debvar']=$d;
?>
