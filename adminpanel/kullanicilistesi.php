<?php
include "C:\AppServ\www/firstphpproject/baglan.php";
include "header.php";

function deneme()
{
echo "OLDU AMK";
}

 ?>


<!-- Sayfa İçerik -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kullanici Listesi</h1>
                </div>
            </div>

            <!-- ... İçerik başlama alanı ... -->

 			          <?php

$sorgu=mysql_query("select * from kullanici");
echo "<table border=1;padding:1,margin:1;>";

echo '<tr><th>Kullanici ID&nbsp;&nbsp;</th><th>&nbsp;&nbsp;Kullanici ad</th><th>Kullanici sifre&nbsp;&nbsp;<th>Kullanici email&nbsp;&nbsp;<th>Kullanici Yetki Seviyesi&nbsp;&nbsp;</tr>';

while($kayit=mysql_fetch_array($sorgu)){
    echo '<a href="http://localhost/firstphpproject"><tr>';
    echo '<td><a href="http://localhost/firstphpproject='.$kayit["kullanici_id"].'">'.$kayit["kullanici_id"].'</td></a> ';
    echo '<td><a href="http://localhost/firstphpproject='.$kayit["kullanici_id"].'">'.$kayit["kullanici_ad"].'</td> ';
    echo '<td><a href="http://localhost/firstphpproject='.$kayit["kullanici_id"].'">'.$kayit["kullanici_sifre"].'</td> ';
    echo '<td><a href="http://localhost/firstphpproject='.$kayit["kullanici_id"].'">'.$kayit["kullanici_email"].'</td> ';
    echo '<td><a href="http://localhost/firstphpproject='.$kayit["kullanici_id"].'">'.$kayit["kullanici_yetki"].'</td> ';
    echo "<td><a href="?>deneme($ali);<?php echo"><i class='fa fa-ban'></i></a></td>";
    echo '</tr></a>';

}
echo '</table>';

?>

        </div>
    </div>



 <?php
 include "footer.php";
 ?>
