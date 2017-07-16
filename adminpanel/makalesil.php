<?php
include "header.php";
$makaleid=$_POST['makaleid'];

if ($_POST) {
  $sorgu=mysql_query("delete from makale where makale_id=".$makaleid);
  echo "
          <script type='text/javascript'>
          alert('Makale Başarıyla Silindi.');
          </script>
";
}else{
  echo "Bir Sorun Oluştu";
}


 ?>

 <div id="page-wrapper">
     <div class="container-fluid">

         <div class="row">
             <div class="col-lg-12">
             <h1 class="page-header">Makale Sil</h1>
             </div>
         </div>

         <!-- ... Your content goes here ... -->

</br>
</br>
</br>
<form action="" method="post">
Makale ID: <input type="text" name="makaleid"/></br>
</br>
<input type="submit" name="gonder" value="Güncelle"></br>

</form>
     </div>
 </div>
 <?php
include "footer.php";
    ?>
