<?
$a['title']="Adicionar Empresa";
escape();

if(!empty($_POST['name']) && 
	!empty($_POST['tel']) && 
	!empty($_POST['email']) && 
	!empty($_POST['crm'])){
			
	$sql = "INSERT INTO companys (name, address, tel, email, notes, crm) VALUES (" .
		'"'. $_POST['name'] .'", "'. $_POST['address'] .'", "'. $_POST['tel'] .'", "'.
		$_POST['email'] .'", "'. $_POST['notes'] .'", "'. $_POST['crm'] .'")';
	deb($sql);
	mysql_query($sql);
	
	header("Location: ".$a['path']."/?load=list_billing");

}
?>
