<?php
include "header.php";
include "C:\AppServ\www/firstphpproject/baglan.php";
// Form Gönderilmişmi Kontrolü Yapalım
        if($_POST){

            // Formdan Gelen Kayıtlar
            $makale_ad        =    $_POST["makale_ad"];
            $makale_metin    =    $_POST["makale_metin"];
            $makale_onecikfoto = $_POST["makale_onecikfoto"];
          //if ($makale_onecikfoto="") {
//$makale_onecikfoto="http://www.sirnakproje.gov.tr/images/resimyok.gif";
  //          }

            // Veritabanına Ekleyelim.
            $ekle        =    mysql_query("insert into makale (makale_ad,makale_metin,makale_onecikfoto) values ('$makale_ad','$makale_metin','$makale_onecikfoto')");

            // Sorun Oluştu mu diye test edelim. Eğer sorun yoksa hata vermeyecektir.
            if($ekle){
                echo "
                        <script type='text/javascript'>
                        alert('Makale Başarıyla Eklendi.');
                        </script>
";
            }else{
                echo "Bir Sorun Oluştu";
            }
        }

 ?>



  <!-- Sayfa İçerik -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Makale Ekle</h1>
                </div>
            </div>

            <!-- ... İçerik başlama alanı ... -->


			<form action="" method="POST">

    <label  for="makale_ad">Makale Adı</label>
  </br>
    <div class="col-md-4">
    <input id="makale_ad" name="makale_ad" placeholder="" class="form-control input-md" required="" type="text">

    </div>


  <!-- Textarea -->



<br>
<br>
<br>

    <label  for="makale_metin" style="float:left;">Makale İçerik</label>

      <textarea class="form-control" id="makale_metin" name="makale_metin"></textarea>



  <!-- Text input-->
</br>
</br>

    <label for="makale_onecikfoto" style="float:left;">Makale Öne Çıkarılan Görsel</label>

    <input id="makale_onecikfoto" name="makale_onecikfoto" placeholder="" class="form-control input-md" type="text">
<span class="help-block">Önerilen boyut 150x150</span>



  <!-- Button -->

    <label class="col-md-4 control-label" for="submit"></label>

      <br>
      <button id="submit" type="submit" name="submit" class="btn btn-primary">Ekle</button>
      <br>


    </form>






        </div>
    </div>






 <?php
include "footer.php";
  ?>
