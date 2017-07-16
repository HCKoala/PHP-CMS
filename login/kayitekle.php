<?php
include "C:\AppServ/www/firstphpproject/baglan.php";

$kullanici_ad=$_POST['kullanici_ad'];
$kullanici_sifre=md5(md5(md5($_POST['kullanici_sifre'])));
$kullanici_email=$_POST['kullanici_email'];

$kontrolsorgusu=mysql_query("select from kullanici where kullanici_ad==".$kullanici_ad);

if (mysql_num_rows($kontrolsorgusu)>=1) {
echo "Lütfen başka bir kullanıcı adı seçin.";
}
elseif (mysql_num_rows($kontrolsorgusu)==0) {

$kullaniciekle=mysql_query("INSERT INTO `kullanici` (`kullanici_id`, `kullanici_ad`, `kullanici_sifre`, `kullanici_email`, `kullanici_yetki`) VALUES (NULL, '$kullanici_ad', '$kullanici_sifre', '$kullanici_email', '0'); ");
if ($kullaniciekle) {
  echo "<script type='text/javascript'>
          alert('Üyelik başarı ile oluşturuldu.');
          </script>";
}
else {
  echo "Bir sorun oluştu.";
}

}
 ?>
