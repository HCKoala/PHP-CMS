<?php
include "C:\AppServ\www/firstphpproject/baglan.php";
include "header.php";

 ?>


<!-- Sayfa İçerik -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Makale Listesi</h1>
                </div>
            </div>

            <!-- ... İçerik başlama alanı ... -->

 			          <?php

$sorgu=mysql_query("select * from makale");
echo "<table border=1;padding:1,margin:1;>";

echo '<tr><th>Makale ID&nbsp;&nbsp;</th><th>&nbsp;&nbsp;Makale Başlık</th></tr>';

while($kayit=mysql_fetch_array($sorgu)){
    echo '<tr>';
    echo '<td>'.$kayit["makale_id"].'</td> ';
    echo '<td>'.$kayit["makale_ad"].'</td> ';
    echo '</tr>';
}
echo '</table>';

?>

        </div>
    </div>



 <?php
 include "footer.php";
 ?>
