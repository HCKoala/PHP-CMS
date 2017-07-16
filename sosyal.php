<?php 
include "baglan.php";
$ayarsor=mysql_query("select*from ayarlar");
$ayarcek=mysql_fetch_assoc($ayarsor);
 ?>

  <div id="social">
    <div class="container">
      <div class="row centered">
      <div class="col-lg-2">
      <?php //iconları ortalamak için bir div ?>  
      </div>
        <div class="col-lg-2">
          <a href="<?php echo $ayarcek['ayar_facebook']; ?>"><i class="fa fa-facebook"></i></a>
        </div>
        <div class="col-lg-2">
          <a href="<?php echo $ayarcek['ayar_twitter']; ?>"><i class="fa fa-twitter"></i></a>
        </div>
        <div class="col-lg-2">
          <a href="<?php echo $ayarcek['ayar_linkedin']; ?>"><i class="fa fa-linkedin"></i></a>
        </div>
        <div class="col-lg-2">
          <a href="<?php echo $ayarcek['ayar_instagram']; ?>"><i class="fa fa-instagram"></i></a>
        </div>
      </div><! --/row -->
    </div><! --/container -->
  </div><! --/social -->
