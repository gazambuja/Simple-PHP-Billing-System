<?
$a['title']="Adicionar NF";
escape('BOTH');

if($_POST['delete']!='' && !empty($_POST['id'])){
	mysql_query("DELETE FROM billing WHERE id=".$_POST['id']);
	header("Location: ".$a['path']."/?load=list_billing");
	exit();
}


if(!empty($_POST['nf']) && // To add some billing
	!empty($_POST['company']) && 
	!empty($_POST['service']) && 
	!empty($_POST['emi_data']) && 
	!empty($_POST['ven_data'])){

	if(empty($_POST['value']))
		$_POST['value']=$_POST['quantity']*mselect($_POST['service'], 'value', 'services');

	if(empty($_POST['id'])){
		$sql = "INSERT INTO billing (id_company, id_services, id_seller, nf, date, venc, pago, notes, quantity, value) VALUES (" .
			'"'. $_POST['company'] .'", "'. $_POST['service'] .'", "'.
			$_POST['seller'] .'", "'. $_POST['nf'] .'", "'. $_POST['emi_data'] .'", "'.
			$_POST['ven_data'] .'", "'. $_POST['pag_data'] .'", "'. $_POST['notes']  .'", "'. $_POST['quantity'] .'", "'. $_POST['value'] .'")';
	}else{
		$sql = "UPDATE billing SET id_company='".$_POST['company']."', id_services='".$_POST['service']."', id_seller='".$_POST['seller'].
		"', nf='".$_POST['nf']."', date='".$_POST['emi_data']."', venc='".$_POST['ven_data']."', pago='".$_POST['pag_data']."', notes='".
		$_POST['notes']."', quantity='".$_POST['quantity']."', value='".$_POST['value']."' WHERE id='".$_POST['id']."'";
	}
	mysql_query($sql);

	if($_POST['sycle']=='1'){ // Add next billing
		$sql = "INSERT INTO billing (nf, id_company, id_services, id_seller, quantity, value, date, venc, notes) VALUES (" .
			'"'. $_POST['nf'] .'", "'. $_POST['company'] .'", "'. $_POST['service'] .'", "'.$_POST['seller'] .'", "'. $_POST['quantity'] .
			'", "'.$_POST['value'].'", CURDATE(), DATE_ADD("'.$_POST['ven_data'].'",INTERVAL 1 MONTH), "'.$_POST['notes'].'")';

		mysql_query($sql);		
	}
	
	header("Location: ".$a['path']."/?load=list_billing");
	exit();
}


if(!empty($_GET['id'])){ // To edit some billing
	$d['value_id']=$_GET['id'];
	$pag_data=mselect($_GET['id'], 'pago', 'billing');
	if($pag_data=='0000-00-00') $pag_data='';

	$d['value_company'] = mselect($_GET['id'], 'id_company', 'billing');
	$d['value_service'] = mselect($_GET['id'], 'id_services', 'billing');
	$d['value_quantity'] = mselect($_GET['id'], 'quantity', 'billing');
	$d['value_value'] = mselect($_GET['id'], 'value', 'billing');
	$d['value_seller'] = mselect($_GET['id'], 'id_seller', 'billing');
	$d['value_nf'] = mselect($_GET['id'], 'nf', 'billing');
	$d['value_emi_data'] = mselect($_GET['id'], 'date', 'billing');
	$d['value_ven_data'] = mselect($_GET['id'], 'venc', 'billing');
	$d['value_pag_data'] = $pag_data;
	$d['value_notes'] = mselect($_GET['id'], 'notes', 'billing');
}

$result = mysql_query("SELECT id, name FROM companys ORDER BY name ASC");
while($row = mysql_fetch_array($result)){
	if(strlen($row['name'])>17) $row['name'] = substr($row['name'], 0, 15) . "...";
	$d['list_company'][$row['id']] = $row['name'];
}

$result = mysql_query("SELECT id, name FROM services ORDER BY name ASC");
while($row = mysql_fetch_array($result)){
	if(strlen($row['name'])>17) $row['name'] = substr($row['name'], 0, 15) . "...";
	$d['list_service'][$row['id']] = $row['name'];
}

$result = mysql_query("SELECT id, name FROM seller ORDER BY name ASC");
while($row = mysql_fetch_array($result)){
	if(strlen($row['name'])>17) $row['name'] = substr($row['name'], 0, 15) . "...";
	$d['list_seller'][$row['id']] = $row['name'];
}

if(empty($d['value_quantity'])) $d['value_quantity']='1';
if(empty($d['value_nf'])) $d['value_nf']='-1';

$a['debvar'][]=$_POST;
$a['debvar'][]=$sql;
$a['debvar'][]=$d;
?>
