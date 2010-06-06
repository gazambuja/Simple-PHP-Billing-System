<?php
//Includes
include('inc/config.php');
include('inc/func.php');

include('app/'.$_GET['load'].'.php');

header("Content-type: application/vnd.ms-excel; name='excel'");
header("Content-Disposition: filename=export.csv");
// Fix for crappy IE bug in download.
header("Pragma: ");
header("Cache-Control: ");

if(isset($d['values'])) $var=$d['values'];
else $var=$d['values2'];

$x=0;
foreach($var as $k => $v){
	if($x==0){ $x=1;
		foreach($v as $k2 => $v2){
			echo '"'.$k2 . '",';
		}
		echo "\n";
	}
	foreach($v as $k2 => $v2){
		echo '"'.$v2.'",';
	}
	echo "\n";
}
?>
