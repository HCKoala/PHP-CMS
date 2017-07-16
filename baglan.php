<?php 

$username="root";
$password="4813249yusuf";
$sunucu="localhost";
$database="hckoala";

$baglan=mysql_connect($sunucu,$username,$password);
mysql_query("SET NAMES UTF8");

if (!$baglan) {
	
	echo "".mysql_errno();
	exit();
}
$db=mysql_select_db($database);
if (!$db) {
	echo "veritabanı hatası: <br>".mysql_error();
	exit();
}




 ?>