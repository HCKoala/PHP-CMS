<?php
include "baglan.php";
$ayarsor=mysql_query("select*from ayarlar");
$ayarcek=mysql_fetch_assoc($ayarsor);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
    <meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">
    <meta name="keywords" content="<?php echo $ayarcek['ayar_keywords']; ?>">
    <link rel="shortcut icon" href="C:\Users\yusuf\Downloads/favicon(1).ico">

    <title> <?php echo $ayarcek['ayar_title']; ?> </title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
   var title = document.title;
   var alttitle = "KAÇMA LA";
   window.onblur = function () { document.title = alttitle; };
   window.onfocus = function () { document.title = title; };
   </script>
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar">adasd</span>
            <span class="icon-bar">asdsad</span>
            <span class="icon-bar">asdasd</span>
          </button>
          <a class="navbar-brand" href="index.php "> <?php echo $ayarcek['ayar_title']; ?> </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">

          <?php
          $sorgu=mysql_query("select * from menu");
          while ($menucek=mysql_fetch_assoc($sorgu)) {


           ?>


            <li class="active"><a href="<?php echo $menucek['menu_url']; ?> "> <?php echo $menucek['menu_ad']; ?> </a></li>
            <?php } ?>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


  <div id="headerwrap">
      <div class="container">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <h4><?php echo $ayarcek['ayar_merhabayazisi']; ?></h4>
          <h1><?php echo $ayarcek['ayar_isim']; ?></h1>
          <h4><?php echo $ayarcek['ayar_acikalama']; ?></h4>
        </div>
      </div><! --/row -->
      </div> <!-- /container -->
  </div><! --/headerwrap -->
