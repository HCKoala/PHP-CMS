<?php
include "C:\AppServ/www/firstphpproject/baglan.php";
 ?>

<!DOCTYPE html>
<html >
<head>

</head>

<body>
<center><h1>HCKoala Giriş Paneli</h1></center>
<div style='padding-top: 140px;'>
<center>
  <form id="form1" name="form1" method="POST" action="login.php">

  <tr>  <td width="16%">Kullanıcı Adı: </td>

    <td width="84%"><input name ="kadi" type="text" required="" /></td> </br>

    <td>Şifre:    </td>
    <td><input name ="sifre" type="password" required="" /></td>
    </br>

      <input type="submit" name="Submit" value="Oturum A&ccedil;" />

  </form>
  <a href="kayitol.php">Hesabın yok mu ? Şimdi kayıt ol.</a>
  </center>
  </div>
</body>
</html>
