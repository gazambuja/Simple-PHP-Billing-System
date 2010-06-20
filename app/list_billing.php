<?
$a['title']="Lista de Empresas";

if(mselect($_SESSION['id'], 'ugroup', 'seller')==1){
	$sql1="SELECT * FROM billing WHERE pago='0000-00-00' ORDER BY venc ASC";
	$sql2="SELECT * FROM billing WHERE pago!='0000-00-00' ORDER BY venc DESC LIMIT 0, 5";
}else{
        $sql1="SELECT * FROM billing WHERE pago='0000-00-00' AND id_seller=".$_SESSION['id']." ORDER BY venc ASC";
        $sql2="SELECT * FROM billing WHERE pago!='0000-00-00' AND id_seller=".$_SESSION['id']." ORDER BY venc DESC LIMIT 0, 5";
}


$result = mysql_query($sql1);
while($row = mysql_fetch_array($result)){ $x++;

	$freq=mselect($row['id_services'], 'freq', 'services');
	if($freq=='0') $freq='Unico';
	elseif($freq=='1') $freq='Mensual';
	elseif($freq=='12') $freq='Anual';
	else $freq = "Cada ".$freq . "meses";

	$company=mselect($row['id_company'], 'name', 'companys');
	if(strlen($company)>17) $company = substr($company, 0, 15) . "...";
	
	if($row['pago']=='0000-00-00') $row['pago']="Não foi pago";
	if($row['nf']=='-1') $row['nf']="n/a";
	
	$d['values'][$x]['id_company']=$row['id_company'];
	$d['values'][$x]['company']=$company;
	$d['values'][$x]['service']=mselect($row['id_services'], 'notes', 'services');
	$d['values'][$x]['quantity']=$row['quantity'];
	$d['values'][$x]['value']=$row['value'];
	$d['values'][$x]['type']=$freq;
	$d['values'][$x]['seller']=mselect($row['id_seller'], 'name', 'seller');
	$d['values'][$x]['id']=$row['id'];			
	$d['values'][$x]['nf']=$row['nf'];
	$d['values'][$x]['date']=$row['date'];
	$d['values'][$x]['venc']=$row['venc'];
	$d['values'][$x]['pago']=$row['pago'];
	$d['values'][$x]['notes']=$row['notes'];
}

$result = mysql_query($sql2);
while($row = mysql_fetch_array($result)){ $x++;

	$freq=mselect($row['id_services'], 'freq', 'services');
	if($freq=='0') $freq='Unico';
	elseif($freq=='1') $freq='Mensual';
	elseif($freq=='12') $freq='Anual';
	else $freq = "Cada ".$freq . "meses";

	$company=mselect($row['id_company'], 'name', 'companys');
	if(strlen($company)>17) $company = substr($company, 0, 15) . "...";
	
	if($row['pago']=='0000-00-00') $row['pago']="Não foi pago";

	$d['values2'][$x]['id_company']=$row['id_company'];	
	$d['values2'][$x]['company']=$company;
	$d['values2'][$x]['service']=mselect($row['id_services'], 'notes', 'services');
        $d['values2'][$x]['quantity']=$row['quantity'];
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
