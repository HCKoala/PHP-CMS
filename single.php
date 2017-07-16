<?php
include "baglan.php";
include "header.php";

$makalenum = $_GET["makaleno"];
$sorgu=mysql_query("Select * from makale where makale_id='$makalenum'");
$sorgu1=mysql_fetch_array($sorgu);

 ?>


	<section id="works"></section>
	<div class="container">
		<div class="row centered mt mb">
			<div class="col-lg-8 col-lg-offset-2">
				<center><h1> <?php echo $sorgu1['makale_ad']; ?> </h1></center>
        <br>
        <br>
				<p> <?php echo $sorgu1['makale_metin']; ?> </p>
        <br>
        <br>

			</div>
      <img style="height:500px;width:500px;" src="<?php

      if ($sorgu1['makale_onecikfoto' ]=="") {
        echo "http://www.seslitc.com/wp-content/themes/bilsemki/imagescharming/resimyok.png";
      }
      else
      {
       echo $sorgu1['makale_onecikfoto'];
      }


       ?>">
     </br>
     <center>
<i style="padding-top:20px;" class="fa fa-share fa-3x" ></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://twitter.com/home/?status=http://localhost/firstphpproject/single.php?makaleno=<?php echo $makalenum ?>"><i style="padding-top:20px;" class="fa fa-twitter fa-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://twitter.com/home/?status=http://localhost/firstphpproject/single.php?makaleno=<?php echo $makalenum ?>"><i style="padding-top:20px;" class="fa fa-facebook fa-3x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://twitter.com/home/?status=http://localhost/firstphpproject/single.php?makaleno=<?php echo $makalenum ?>"><i style="padding-top:20px;" class="fa fa-google-plus fa-3x"></i></a>
</center>

		</div><! --/row -->
	</div><! --/container -->
	<?php
include "sosyal.php";
include "footer.php";
	 ?>
