<?php
include("C:\AppServ\www/firstphpproject/baglan.php");
ob_start();
session_start();

if (!isset($_SESSION['user'])) {
    header("Location:http://localhost/firstphpproject/login");

}
//else
//{
 //header("Refresh: 2; url: http://localhost/denemetemasi/adminpanel/adminpanel.php");
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Paneli</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><b>HCKoala</b></a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="http://localhost/firstphpproject/"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> Yeni Yorum
                                <span class="pull-right text-muted small">4 dakika önce</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>Bütün Bildirimleri Görüntüle</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i><?php echo $_SESSION['user']; ?><b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Kullanıcı Profili</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ayarlar</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Çıkış</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Ara...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="adminpanel.php"><i class="fa fa-home"></i> Anasayafa</a>
                    </li>
                    <li>
                        <a href="istatistik.php"><i class="fa fa-bar-chart"></i> İstatistikler</a>
                    </li>
                    <li>
                     <a href="#" ><i class="fa fa-file-text-o"></i> Makale <span class="fa arrow"></span> </a>
                     <ul class="nav nav-second-level">
                         <li><a href="makalelistele.php">Makale Listesi</a></li>
                         <li><a href="yaziekle.php"> Makale Ekle</a></li>
                         <li><a href="makaleduzenle.php"> Makale Düzenle </a></li>
                         <li><a href="makalesil.php"> Makale Sil</a></li>
                     </ul>
                    </li>
                    <li>
                     <a href="#" ><i class="fa fa-users"></i> Kullanıcılar <span class="fa arrow"></span> </a>
                     <ul class="nav nav-second-level">
                         <li><a href="kullanicilistesi.php">Kullanıcı Listesi</a></li>
                     </ul>
                    </li>
                    <li>
                     <a href="#" ><i class="fa fa-cogs"></i> Menü Ayarları<span class="fa arrow"></span></a>
                     <ul class="nav nav-second-level">
                       <li><a href="menuekle.php">Menu Ekle</a></li>
                       <li><a href="menulistele.php">Menu Listesi</a></li>
                       <li><a href="menusil.php">Menu Sil</a></li>
                       <li><a href="menuduzenle.php">Menu Düzenle</a></li>
                     </ul>
                    </li>
                    <li>
                     <a href="#" ><i class="fa fa-cogs"></i> Ayarlar<span class="fa arrow"></span> </a>
                     <ul class="nav nav-second-level">
                         <li><a href="mainayar.php">Anasayfa Ayarları</a></li>
                         <li><a href="seoayar.php">Seo Ayarları</a></li>
                         <li><a href="sosyalayar.php">Sosyal Medya Ayarları</a></li>
                         <li><a href="footerayar.php">Footer Ayarları</a></li>
                     </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <?php ob_end_flush(); ?>
