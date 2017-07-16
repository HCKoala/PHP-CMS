<?php 
include "baglan.php";
include "header.php";
 ?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<title>İletişime geç</title>
</head>
<body>
<form name="iletisimform" method="POST" action="mailgonder.php">
<center>
Adınız ve Soyadınız: <input type="text" name="adsoyad"><br/>
E-Mail Adresiniz: <input type="text" name="email"><br/>
Telefon Numaranız: <input type="text" name="telefon"><br/>
İletmek istediğiniz mesajınız: <textarea rows="5" name="mesaj" cols="30"></textarea><br/>
<input type="submit" name="button" value="Gönder">
</center>
</form>
</body>
</html>



 <?php 
include "footer.php";
  ?>