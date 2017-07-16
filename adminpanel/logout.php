<?php
session_start();
session_destroy();
echo "<center>Başarıyla Çıkış Yaptınız. Anasayfaya Yönlendiriyorsunuz.</center>";
header("Refresh: 2; url=http://localhost/firstphpproject/");
?>
