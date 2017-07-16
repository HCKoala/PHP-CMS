<?php
include("C:\AppServ\www/firstphpproject/baglan.php");
include("header.php");

 $ayarsor1=mysql_query("select * from ayarlar where ayar_id=1");
 $ayarcek1=mysql_fetch_assoc($ayarsor1);
if($_POST){

            // Formdan Gelen Kayıtlar
            $ayar_facebook = $_POST["ayar_facebook"];
            $ayar_twitter = $_POST["ayar_twitter"];
            $ayar_linkedin = $_POST["ayar_linkedin"];
            $ayar_instagram = $_POST["ayar_instagram"];


            // Veritabanına Ekleyelim.
            $ekle = mysql_query("UPDATE `ayarlar` SET `ayar_facebook` = '$ayar_facebook', `ayar_twitter` = '$ayar_twitter', `ayar_linkedin` = '$ayar_linkedin', `ayar_instagram` = '$ayar_instagram' WHERE `ayarlar`.`ayar_id` = 1 ");

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
                    <h1 class="page-header">Sosyal Medya Ayarları</h1>
                </div>
            </div>
<form action="" method="post">
     <br>
            Facebook:          <input type="text" name="ayar_facebook" value="<?php echo $ayarcek1['ayar_facebook']; ?>" />
            <br>
            <br>
            Twitter:           <input type="text" name="ayar_twitter" value="<?php echo $ayarcek1['ayar_twitter']; ?>"/>
            <br>
            <br>
            Linkedin:          <input type="text" name="ayar_linkedin" value="<?php echo $ayarcek1['ayar_linkedin']; ?>"/>
            <br>
            <br>
            İnstagram:         <input type="text" name="ayar_instagram" value="<?php echo $ayarcek1['ayar_instagram']; ?>"/>
            <br>
            <input type="submit" name="submit" value="Güncelle">
</form>
            <!-- ... Your content goes here ... -->
        </div>
    </div>

 <?php
include "footer.php";
 ?>
