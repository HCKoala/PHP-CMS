<?php
include "header.php";

session_start();

?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">İstatistikler</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->

<?php
            $dosya = fopen('C:\AppServ\www\firstphpproject/sayac.txt', 'r');
            $icerik = fread($dosya, filesize('C:\AppServ\www\firstphpproject/sayac.txt'));
            echo "Toplam Görüntüleme: ".$icerik;
            fclose($dosya);

            $dosya1 = fopen('C:\AppServ\www\firstphpproject/yanlisgirissayac.txt', 'r');
            $icerik1 = fread($dosya1, filesize('C:\AppServ\www\firstphpproject/yanlisgirisssayac.txt'));
            echo "Toplam Yanlış Giriş Denemesi: ".$icerik1;
            fclose($dosya1);
?>

        </div>
    </div>
<?php
include "footer.php";
 ?>
