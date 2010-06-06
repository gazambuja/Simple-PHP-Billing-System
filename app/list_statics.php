<?
$a['title']="Estatística";

$months=array('Jan', 'Feb', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');

if(mselect($_SESSION['id'], 'ugroup', 'seller')!=1){
	$where="AND id_seller=".$_SESSION['id'];
}else{
	$where="";
}


foreach($months as $key => $month){
	$knum=(int)$key; $knum=$knum+1;
	$year=date("Y"); $in=0; $out=0;

	$sql="SELECT value FROM billing WHERE venc BETWEEN '$year-$knum-01' AND '$year-$knum-31' $where";

	$result = mysql_query($sql);
	while($row = mysql_fetch_row($result)){
		if($row[0]>0) $in=$in+$row[0];
		else $out=$out+$row[0];
	}
	
	$d['values'][$key]['month']=$month;
	$d['values'][$key]['in']=$in;
        $d['values'][$key]['out']=$out;
        $d['values'][$key]['total']=$in+$out;

	if(empty($d['graph']['in'])) $d['graph']['in']= "$in";
	$d['graph']['in']=$d['graph']['in'].",$in";

        if(empty($d['graph']['out'])) $d['graph']['out']= abs($out);
        $d['graph']['out']=$d['graph']['out'].",".abs($out);

}

$d['graph']['data']="[".$d['graph']['in']."], [".$d['graph']['out']."]";

$a['debvar']=$d;
?>
