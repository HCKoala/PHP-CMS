<?php
include("C:\AppServ\www/firstphpproject/baglan.php");
include("header.php");


 $ayarsor1=mysql_query("select * from ayarlar where ayar_id=1");
 $ayarcek1=mysql_fetch_assoc($ayarsor1);
if($_POST){

            // Formdan Gelen Kayıtlar
            $ayar_facikalama = $_POST["ayar_facikalama"];
            $ayar_flokasyon = $_POST["ayar_flokasyon"];
            $ayar_fimail = $_POST["ayar_fimail"];


            // Veritabanına Ekleyelim.
            $ekle = mysql_query("UPDATE `ayarlar` SET `ayar_faciklama` = '$ayar_facikalama', `ayar_flokasyon` = '$ayar_flokasyon', `ayar_fimail` = '$ayar_fimail' WHERE `ayarlar`.`ayar_id` = 1 ");

            // Sorun Oluştu mu diye test
            if($ekle){
                echo "Başarılı Bir Şekilde Eklendi !";
            }else{
                echo "Bir Sorun Oluştu";
            }

            //

        }
 ?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Footer Ayarları</h1>
                </div>
            </div>
<form action="" method="post">
<br>
            Footer Açıklama:   <input type="text" name="ayar_facikalama" value="<?php echo $ayarcek1['ayar_faciklama']; ?>"/>
            <br>
            <br>
            Footer Lokasyon:  <input type="text" name="ayar_flokasyon" value="<?php echo $ayarcek1['ayar_flokasyon']; ?>"/>
            <br>
            <br>
            Footer Mail:      <input type="text" name="ayar_fimail" value="<?php echo $ayarcek1['ayar_fimail']; ?>"/>
            <br>
<input type="submit" name="submit" value="Güncelle">

</form>
            <!-- ... Your content goes here ... -->
        </div>
    </div>

 <?php
include "footer.php";
 ?>
