<?php
include "header.php";
 ?>
 <?php
 $makale_id=$_POST["makale_id"];
 $makale_ad=$_POST["makale_ad"];
 $makale_onecikfoto=$_POST["makale_onecikfoto"];
 $makale_metin=$_POST["makale_metin"];

if ($_POST) {
  $sorgu=mysql_query("UPDATE `makale` SET `makale_metin` = '$makale_metin', `makale_ad`='$makale_ad', `makale_onecikfoto`='$makale_onecikfoto' WHERE `makale`.`makale_id` = $makale_id  ;" );
  if($sorgu)
            {
      echo "  <script type='text/javascript'>
              alert('Makale Başarıyla düzenlendi.');
              </script>";
            }
  else
            {
        echo "Bir Sorun Oluştu";
            }
}
?>

<!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                <h1 class="page-header">Makale Düzenle</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->

<form action="" method="post">

 	Makale ID: <input type="text" name="makale_id" value=""></br>
 	Makale Adı:<input type="text" name="makale_ad" value=""></br>
 	Makale İçerik: <input type="text" name="makale_metin" cols="30" rows="5" required="" value=""></br>
  Makale Öne Çıkarılan Fotoğraf: <input type="text" name="makale_onecikfoto" required=""></br>
  <input type="submit" name="gonder" value="Güncelle"></br>

</form>
        </div>
    </div>






 <?php
 include "footer.php"
 ?>
