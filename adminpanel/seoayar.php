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
            $ayar_title = $_POST["ayar_title"];
            $ayar_keywords = $_POST["ayar_keywords"];
            $ayar_description = $_POST["ayar_description"];
            $ayar_facebook = $_POST["ayar_facebook"];
            $ayar_twitter = $_POST["ayar_twitter"];
            $ayar_linkedin = $_POST["ayar_linkedin"];
            $ayar_instagram = $_POST["ayar_instagram"];
            $ayar_facikalama = $_POST["ayar_facikalama"];
            $ayar_flokasyon = $_POST["ayar_flokasyon"];
            $ayar_fimail = $_POST["ayar_fimail"];
            $ayar_sliderfoto = $_POST["makale_metin"];  //????!!!

            // Veritabanına Ekleyelim.
            $ekle = mysql_query("UPDATE `ayarlar` SET `ayar_title` = '$ayar_title',`ayar_keywords` = '$ayar_keywords',`ayar_description` = '$ayar_description',`ayar_author` = '$ayar_author' WHERE `ayar_id` = 1 ");

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
                    <h1 class="page-header"> SEO Ayarları</h1>
                </div>
            </div>
<form action="" method="post">
<br>
            Title:             <input type="text" name="ayar_title" value="<?php echo $ayarcek1['ayar_title']; ?> "/>
            <br>
            <br>
            Keywords:          <input type="text" name="ayar_keywords" value="<?php echo $ayarcek1['ayar_keywords']; ?>"/>
            <br>
            <br>
            Description:       <input type="text" name="ayar_description" value="<?php echo $ayarcek1['ayar_description']; ?>"/>
            <br>
            <br>
            Author:           <input type="text" name="ayar_author" value="<?php echo $ayarcek1['ayar_author']; ?>"/>
            <br>
            <input type="submit" name="submit" value="Güncelle">
</form>
            <!-- ... Your content goes here ... -->
        </div>
    </div>

 <?php
include "footer.php";
 ?>
