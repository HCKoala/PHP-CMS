<?php
include 'baglan.php';

 ?>
<section id="works"></section>
  <div class="container">
    <div class="row centered mt mb">
      <h1>Son Makaleler</h1>
      <br>

      <br>
<?php

          $sorgu=mysql_query("select * from makale ORDER BY makale_id DESC");
          while ($makalecek=mysql_fetch_assoc($sorgu))
            {

echo "<a href='http://localhost/firstphpproject/single.php?makaleno=".$makalecek['makale_id']."'><img alt='".$makalecek['makale_ad']."' height='150px' hspace='2' width='250px' src='".$makalecek['makale_onecikfoto']."'/></a>";


             } ?>
    </div><! --/row -->
  </div><! --/container -->
