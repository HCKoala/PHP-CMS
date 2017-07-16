<?php
include "header.php";
include "C:\AppServ\www/firstphpproject/baglan.php";
//Post işlemi yapıldığı zaman devreye girecek kodlar.
if($_POST){
$menu_url= $_POST["menu_url"];
$menu_ad= $_POST["menu_ad"];

$ekle        =    mysql_query("insert into menu (menu_ad,menu_url) values ('$menu_ad','$menu_url')");
if($ekle){
    echo "
            <script type='text/javascript'>
            alert('Menü Başarıyla Eklendi.');
            </script>
";
}else{
    echo "Bir Sorun Oluştu";
}
}
?>

<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Menü Ekle</h1>
                <h4>Ana menü'de en fazla 4 eleman önerilir.</h4>
            </div>
        </div>

<form action="" method="post">
<br>
Menü eleman adı:<input type="text" name="menu_ad" value="" required="">
<br>
Menü url: <input type="text" name="menu_url" value="" required="">
<br>
<input type="submit" name="submit" value="Ekle">
</form>

            <!-- ... Your content goes here ... -->
        </div>
    </div>
<?php
include "footer.php";
  ?>
