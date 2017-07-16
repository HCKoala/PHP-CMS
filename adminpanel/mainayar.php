<?php
include("C:\AppServ\www/firstphpproject/baglan.php");
include("header.php");
 $ayarsor1=mysql_query("select * from ayarlar where ayar_id=1");
 $ayarcek1=mysql_fetch_assoc($ayarsor1);
if($_POST){

            // Formdan Gelen Kayıtlar
            $ayar_isim = $_POST["ayar_isim"];
            $ayar_merhabayazisi  = $_POST["ayar_merhabayazisi"];
            $ayar_acikalama = $_POST["ayar_acikalama"];
            //$ayar_title = $_POST["ayar_title"];
            //$ayar_keywords = $_POST["ayar_keywords"];
            //$ayar_description = $_POST["ayar_description"];
          //  $ayar_facebook = $_POST["ayar_facebook"];
          //  $ayar_twitter = $_POST["ayar_twitter"];
            //$ayar_linkedin = $_POST["ayar_linkedin"];
            //$ayar_instagram = $_POST["ayar_instagram"];
            //$ayar_facikalama = $_POST["ayar_facikalama"];
            //$ayar_flokasyon = $_POST["ayar_flokasyon"];
            //$ayar_fimail = $_POST["ayar_fimail"];
            //$ayar_sliderfoto = $_POST["makale_metin"];

            // Veritabanına Ekleyelim.
            $ekle = mysql_query("UPDATE `ayarlar` SET `ayar_isim` = '$ayar_isim', `ayar_merhabayazisi` = '$ayar_merhabayazisi', `ayar_acikalama` = '$ayar_acikalama', `ayar_title` = '$ayar_title' WHERE `ayarlar`.`ayar_id` = 1 ");

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
                <h1 class="page-header">Ana Ayarlar</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
<form action="" method="post">
<br>
            İsim:              <input type="text" name="ayar_isim" value="<?php echo htmlspecialchars($ayarcek1['ayar_isim']); ?>" />
            <br>
            <br>
            Merhaba Yazısı:    <input type="text" name="ayar_merhabayazisi" value="<?php echo $ayarcek1['ayar_merhabayazisi']; ?>"/>
            <br>
            <br>
            Açıklama:          <input type="text" name="ayar_acikalama" value="<?php echo $ayarcek1['ayar_acikalama']; ?>"/>
            <br>


            <br>
                   <input type="submit" name="submit" value="Güncelle">

</form>
        </div>
    </div>

 <?php
include "footer.php";
 ?>
