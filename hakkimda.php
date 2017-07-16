<?php
include "header.php";
 ?>

 <section id="works"></section>
 <div class="container">
   <div class="row centered mt mb">
     <div class="col-lg-8 col-lg-offset-2">
       <center><h1>Hakkımda</h1></center>
       <br>
       <br>
       <p>İnka Tescil, Bireysel ve Kurumsal Internet Hizmetleri sunabilmek amacıyla 2007 yılında kurulmuştur. Kurulduğu günden itibaren müşterilerine kesintisiz, hızlı ve güvenilir internet hizmetleri sunmayı ve eksiksiz müşteri memnuniyetini amaç edinmiştir.

2007 yılından bu yana firmamız ağırlıklı olarak bireysel hosting pazarında faaliyet göstermekle birlikte, 2009 yılı itibari ile kurumsal pazarda da ağırlığını hissettirmek üzere yeni yatırımlar yapmaktadır.

Sunduğumuz hizmetler arasında Domain Tescil işlemleri, Hosting (Barındırma) , E-Mail Servisleri ve Bayi Hosting Servisimiz bulunmaktadır.

Hizmetlerimizin kalitesini korumak ve geliştirmek için daima yenilikleri takip etmekte ve sistemimize entegre etmekdeyiz.

En iyi hizmeti verebilmek için en iyilerle çalışılması gerekir.

Bu nedenle birlikte çalışmakta olduğumuz iş ortakları ve tedarikçi firmalar konusunda da çok titiz davranmaktayız. Hizmetlerimiz size sektörünün en iyi yazılım, en iyi donanım ve en iyi internet çıkışlarıyla sunulmaktadır.

2009 yılı Standart Hosting ve Profesyonel Hosting çözümlerimizin yanısıra Bayi Hosting çözümlerini de sunmaya başladık.

Kaliteli hızmet, hızlı erişim ve ekonomik fiyatlarımız sayesinde birçok müşterimiz tarafından seçildik.

Çalışmalarınızda başarılar dileriz.

Saygılarımızla
İnka Tescil İnternet Hizmetleri</p>
       <br>
       <br>

     </div>
     <img style="height:500px;width:500px;" src="<?php
     $resim==$sorgu1['makale_onecikfoto'];
     if ($resim=="") {
       echo "http://www.seslitc.com/wp-content/themes/bilsemki/imagescharming/resimyok.png";
     }
     else
     {
      echo $sorgu1['makale_onecikfoto'];
     }


      ?>">
 <?php
 include "footer.php";
  ?>
