<?php

include("class/config.php");

$db = new DB();
$db->connect("localhost","template_web");




$list = $db->query("SELECT t1.* FROM template_web.t_user t1");


if($list){
	
	foreach($list as $row) {
	print_R($row);
	}
	
	//echo "INSERT INTO k4465871_cronData.db_log (message, type,datetime) VALUES('test ya','yoyo',".date("Y-m-d H:i:s").")";
	
	//$db->execute("INSERT INTO k4465871_cronData.db_log (message, type,datetime) VALUES('test ya','yoyo','".date("Y-m-d H:i:s")."')");
	
	
	
}
else{
	echo "no data";
}





?>