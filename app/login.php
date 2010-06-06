<?
$a['title']="Ingressar no Sistema";
escape();

if(!empty($_POST['username']) && !empty($_POST['password'])){
	$user=$_POST['username']; 
	$pass=md5($_POST['password']);

	$sql="SELECT * FROM seller WHERE username='$user' and password='$pass'";
	$result=mysql_query($sql);

	$row = mysql_fetch_array($result);
	if($row['id']>0){
		$_SESSION["username"]=$user;
		$_SESSION["password"]=$pass;
		$_SESSION["id"]=$row['id'];
		header("Location: ".$_SERVER["PHP_SELF"]);
	}
}
?>
