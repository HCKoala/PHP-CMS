<?php
include "header.php";
 ?>
 <?php

 $menu_ad=$_POST["menu_ad"];
 $menu_url=$_POST["menu_url"];
 $menu_id=$_POST["menu_id"];

 if ($_POST) {
   $sorgu=mysql_query("UPDATE `menu` SET `menu_ad` = '$menu_ad', `menu_url`='$menu_url'  WHERE `menu`.`menu_id` = $menu_id; ");
   if ($sorgu) {
     echo "
             <script type='text/javascript'>
             alert('Menü Başarıyla Eklendi.');
             </script>
 ";
  }
  else {
    echo "Bir sorun oluştu.";
  }
 }



?>
<!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                <h1 class="page-header">Menü Düzenle</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
            <center>
<form action="" method="post">

 	Menu ID: <input type="text" name="menu_id" value=""></br>
 	Menu Ad:<input type="text" name="menu_ad" value=""></br>
 	Menu URL<input type="text" name="menu_url" cols="30" rows="5" required="" value="<?php $sorgu=['makale_metin']; ?>"></br>
 	<input type="submit" name="gonder" value="Güncelle"></br>

</form></center>
        </div>
    </div>






 <?php
 include "footer.php"
 ?>
