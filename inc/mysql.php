<?
//Configuracion de la conexion a base de datos
$bd_host = "localhost"; 
$bd_usuario = "username"; 
$bd_password = "password"; 
$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
mysql_select_db("billing", $con);

mysql_query("SET NAMES utf8");
?>
