<?php
include("C:\AppServ\www/firstphpproject/baglan.php");
ob_start();
session_start();

$kadii = $_POST['kadi'];
$sifree = md5(md5(md5($_POST['sifre'])));

$sql_check = mysql_query("select * from kullanici where kullanici_ad='".$kadii."' and kullanici_sifre='".$sifree."' ") or die(mysql_error());

if(mysql_num_rows($sql_check)==1)  {
	$sqlquery= mysql_query("select kullanici_ad,kullanici_sifre,kullanici_id from kullanici where kullanici_ad='".$kadii."' and kullanici_sifre='".$sifree."' ");
	//Her şey başarılı ise olacak:
    $_SESSION["login"] = "1";
    $_SESSION["user"] = $kadii;
    $_SESSION["pass"] = $sifree;
    $_SESSION["userid"] = $sqlquery['kullanici_id'];
    header("Location: http://localhost/firstphpproject/adminpanel/adminpanel.php");
//echo "deneme";
}
elseif (mysql_num_rows($sql_check)>1)
{
	//eğer sorguda birden fazla kullanıcı çıkarsa:
	echo "Birden fazla aynı kullanıcı var!";
}
elseif (mysql_num_rows($sql_check)==0)
{
	//Eğer sorguda kullanıcı çıkmazsa:
	echo "Sistemde böyle bir kullanıcı yok!</br>";
	echo "<b>kullanıcı adı:</b> ".$kadii;
	echo "<b></br>Sifre:</b> ".$sifree;

	$dosya="C:\AppServ\www\firstphpproject/yanlisgirissayac.txt";

	$d = fopen($dosya, r);
	$bilgi = fread($d, filesize($dosya));
	$yeni= $bilgi+1;
	fclose($d);
	fopen($dosya, w);
	fwrite($d, $yeni);
	fclose($d);
}
ob_end_flush();
?>
