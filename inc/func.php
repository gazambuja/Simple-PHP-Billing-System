<?
//Functions
function mselect($id, $row, $table){
	$result = mysql_query("SELECT $row FROM $table WHERE id=$id");
	if($result) {
		$val = mysql_fetch_row($result);
		return $val[0];
	}else
		return NULL;
}
function optiond($val, $sel){
	if($val==$sel) echo "value='$val' selected='selected'";
	else echo "value='$val'";
}

function escape($type="POST", $var=''){
	global $_POST, $_GET;
	
	switch($type){
		case "POST":
			foreach ($_POST as $key => $value) { 
				$_POST[$key] = mysql_real_escape_string($value);
			}
			break;
		case "GET":
			foreach ($_GET as $key => $value) { 
				$_GET[$key] = mysql_real_escape_string($value);
			}
			break;
		case "BOTH":
			foreach ($_POST as $key => $value) { 
				$_POST[$key] = mysql_real_escape_string($value);
			}
			foreach ($_GET as $key => $value) { 
				$_GET[$key] = mysql_real_escape_string($value);
			}
			break;
		case "SPEC":
			$var = mysql_real_escape_string($var);
			break;
	}
}

function deb($var){
	global $a;
	
	if($a['debug']=='1'){
		echo "<div id='debug'>";
		 if(is_array($var)) print_r($var);
		 else echo $var;
		echo "</div>";
	}
}
function eduplicate($id, $table, $f){
        $sql = "SELECT ";
         foreach ($f as $k => $v) {
                if($f[count($f)-1]==$v) $sql .= "$v";
                else $sql .= "$v, ";
         }
	$sql .= " FROM $table WHERE id='$id'";

        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);

	$sql = "INSERT INTO $table (";
	 foreach ($f as $k => $v) {
		if($f[count($f)-1]==$v) $sql .= "$v";
		else $sql .= "$v, ";
	 }
	$sql .= ") VALUE (";
         foreach ($f as $k => $v) {
                if($f[count($f)-1]==$v) $sql .= "'".$row[$k]."'";
                else $sql .= "'".$row[$k]."', ";
         }
	$sql .= ")";

        $result = mysql_query($sql);
}

?>
