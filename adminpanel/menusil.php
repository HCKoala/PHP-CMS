<?php
include "C:\AppServ\www/firstphpproject/baglan.php";
include "header.php";

if ($_POST) {
  $menu_id= $_POST["menu_id"];
  $menu_ad= $_POST["menu_ad"];

  $sil        =    mysql_query("DELETE FROM `menu` WHERE `menu`.`menu_id` = '$menu_id'");
  if($sil){
      echo "
              <script type='text/javascript'>
              alert('Menü Başarıyla Silindi.');
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
                 <h1 class="page-header">Menü Sil</h1>
             </div>
         </div>

 <form action="" method="post" style="padding-left:100px;">
Menu ID: <input  style="text" name="menu_id" required=""></input>
</br>
</br>
Menu AD: <input  style="text" name="menu_ad" required=""></input>
</br>
</br>
<input type="submit" name="submit" value="Sil">

 </form>

             <!-- ... Your content goes here ... -->
         </div>
     </div>
<?php
include "footer.php";
 ?>
