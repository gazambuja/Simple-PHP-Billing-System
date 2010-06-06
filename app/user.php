<?
$a['title']="Mudar a Senha";
escape();

if(!empty($_POST['password']) && $_POST['password']==$_POST['password2']){
	$pass=md5($_POST['password']);

	$sql="UPDATE seller SET password='$pass' WHERE id='".$_SESSION['id']."'";
	$result=mysql_query($sql);

	header("Location: ".$_SERVER["PHP_SELF"]);
}
?>
