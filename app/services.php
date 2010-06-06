<?
$a['title']="Adicionar Serviço";
escape();

if(!empty($_POST['name']) && 
	!empty($_POST['value'])){
			
	$sql = "INSERT INTO services (name, freq, value, notes) VALUES (" .
		'"'. $_POST['name'] .'", "'. $_POST['freq'] .'", "'. $_POST['value'] .'", "'. $_POST['notes'] .'")';
	deb($sql);
	mysql_query($sql);
	
	header("Location: ".$a['path']."/?load=list_billing");

}
?>
