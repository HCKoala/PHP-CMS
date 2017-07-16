<?php include "header.php";
include "C:\AppServ\www/firstphpproject/baglan.php";
 ?>,
 <div id="page-wrapper">
     <div class="container-fluid">

         <div class="row">
             <div class="col-lg-12">
                 <h1 class="page-header">Makale Listesi</h1>
             </div>
         </div>
<?php

$sorgu=mysql_query("select * from menu");
echo "<table border=1;padding:1,margin:1;>";

echo '<tr><th>menu ID&nbsp;&nbsp;</th><th>&nbsp;&nbsp;menu Ad</th><th>&nbsp;&nbsp;menu URL</th></tr>';

while($kayit=mysql_fetch_array($sorgu)){
echo '<tr>';
echo '<td>&nbsp;&nbsp;'.$kayit["menu_id"].'&nbsp;&nbsp;</td> ';
echo '<td>&nbsp;&nbsp;'.$kayit["menu_ad"].'&nbsp;&nbsp;</td> ';
echo '<td>&nbsp;&nbsp;'.$kayit["menu_url"].'&nbsp;&nbsp;</td> ';
echo '</tr>';
}
echo '</table>';

?>
</div>
</div>
<?php
include "footer.php";
  ?>
