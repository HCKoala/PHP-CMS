<?php
 //iletişim sayfası localhost'ta çalışmadığı için test edilemedi.
$adsoyad = $_POST["adsoyad"];
$email = $_POST["email"];
$telefon = $_POST["telefon"];
$mesaj = $_POST["mesaj"];
$alici = "admin@halaycekenkoala.com"; //Buraya iletişim formunun gönderileceği mail adresi.
$konu = "Iletisim Formu";
$ipadres = $_SERVER['REMOTE_ADDR'];
 
if (($isimsoyisim=="") or ($email=="") or ($telefon=="") or ($mesaj=="")) {
echo "Lütfen tüm alanları doldurun";
}
else
{
$mesajlar.="iletisim formu mesaji<br/><br/>";
$mesajlar.="isim Soyisim: ".$isimsoyisim."<br/>";
$mesajlar.="E-Mail: ".$email."<br/>";
$mesajlar.="Telefon: ".$telefon."<br/>";
$mesajlar.="Mesaj: ".$mesaj."<br/>";
$mesajlar.="Ip Adres: ".$ipadres."<br/>";
 
$mesajgonder=mail($alici, $konu, $mesajlar, "Content-type: text/html; charset=utf-8\r\n");
if ($mesajgonder)
{
echo ("Mesajınız başarılı bir şekilde ulaştı. İletişim sayfasına geri dönmek için <br><a href=index.php>Buraya Tıklayın</a>");
}
else
{
echo ("MEsajınız gönderilirken bir hata oluştu. Daha sonra tekrar deneyin");
}
}
?>