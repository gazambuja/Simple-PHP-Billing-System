<?
$a['title']="Lista de NFs já pagas";
escape();
$id_company=$_GET['id'];

$result = mysql_query("SELECT * FROM billing WHERE id_company=$id_company ORDER BY venc DESC");
while($row = mysql_fetch_array($result)){ $x++;

	$freq=mselect($row['id_services'], 'freq', 'services');
	if($freq=='0') $freq='Unico';
	elseif($freq=='1') $freq='Mensual';
	elseif($freq=='12') $freq='Anual';
	else $freq = "Cada ".$freq . "meses";

	$company=mselect($row['id_company'], 'name', 'companys');
	if(strlen($company)>17) $company = substr($company, 0, 15) . "...";
	
	if($row['pago']=='0000-00-00') $row['pago']="Não foi pago";
	
	$d['values2'][$x]['company']=$company;
	$d['values2'][$x]['service']=mselect($row['id_services'], 'notes', 'services');
//	$d['values2'][$x]['value']=mselect($row['id_services'], 'value', 'services');
	$d['values2'][$x]['value']=$row['value'];
	$d['values2'][$x]['type']=$freq;
	$d['values2'][$x]['seller']=mselect($row['id_seller'], 'name', 'seller');
	$d['values2'][$x]['id']=$row['id'];			
	$d['values2'][$x]['nf']=$row['nf'];
	$d['values2'][$x]['date']=$row['date'];
	$d['values2'][$x]['venc']=$row['venc'];
	$d['values2'][$x]['pago']=$row['pago'];
	$d['values2'][$x]['notes']=$row['notes'];
}

$a['debvar']=$d;
?>
