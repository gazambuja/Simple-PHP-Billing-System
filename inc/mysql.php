<?
$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
mysql_select_db($bd_database, $con);

mysql_query("SET NAMES utf8");
?>
