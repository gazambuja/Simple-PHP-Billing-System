<?
//Includes
include('inc/config.php');
include('inc/func.php');
include('inc/comm.php');

if(!$_SESSION['username']){
	$load = 'login';
}elseif(isset($_POST['load'])){
	$load = $_POST['load'];
}elseif(isset($_GET['load'])){
	$load = $_GET['load'];
}

if(!isset($load)) $load='list_billing';
	
include('app/'.$load.'.php');
include('view/header.php');
include('view/'.$load.'.php');
include('view/footer.php');
	
?>
