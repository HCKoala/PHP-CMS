<?php
include "baglan.php";
$ayarsor=mysql_query("select ayar_fimail,ayar_faciklama,ayar_flokasyon from ayarlar");
$ayarcek=mysql_fetch_assoc($ayarsor);

$dosya="sayac.txt";

$d = fopen($dosya, r);
$bilgi = fread($d, filesize($dosya));
$yeni= $bilgi+1;
fclose($d);

if($d = fopen($dosya, w))
{
  fwrite($d, $yeni);
  fclose($d);
}else{
  print "<center>Sayaçta sorun var</center>";
}

//print "<center>Şu ana kadar ".$yeni." kişi siteyi ziyaret etti. </center>";

?>

<div id="footerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-4">
					<p><b><?php echo $ayarcek['ayar_faciklama']; ?></b></p>
				</div>

				<div class="col-lg-4">
					<p><?php echo $ayarcek['ayar_flokasyon']; ?></p>
				</div>
				<div class="col-lg-4">
					<p><a href="mailto: <?php echo $ayarcek['ayar_fimail'];  ?>"><?php echo $ayarcek['ayar_fimail']; ?></a></p>
				</div>
			</div>
		</div>
	</div><! --/footerwrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>

</html>
