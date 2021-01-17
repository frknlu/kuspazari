<?php include("baglanti.php");
 $bilgiler=$_COOKIE["kullanici"]; 
 header('X-XSS-Protection: 0');
 if($bilgiler==""){
	 header("Refresh:0; url=index.php");
 }
 else{
?>
<!DOCTYPE html>
<html lang="tr">
   <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="Sherlock Medya">
      <title>İlanlarım - Kuspazari.pet</title>
      <link rel="icon" href="images/favicon.ico" type="image/x-icon">
      <!-- BOOTSTRAPE STYLESHEET CSS FILES -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- JQUERY SELECT -->
      <link href="css/select2.min.css" rel="stylesheet" />
      <!-- JQUERY MENU -->
      <link rel="stylesheet" href="css/bootstrap-dropdownhover.css">
      <!-- ANIMATION -->
      <link rel="stylesheet" href="css/animate.min.css">
      <!-- OWl  CAROUSEL-->
      <link rel="stylesheet" href="css/owl.carousel.css">
      <link rel="stylesheet" href="css/owl.style.css">
      <!-- TEMPLATE CORE CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- MOBILE MENU CSS -->
      <link href="css/meanmenu.min.css" rel="stylesheet">
      <!-- FONT AWESOME -->
      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/et-line-fonts.css" type="text/css">
      <link rel="stylesheet" type="text/css" href="fonts/classified/flaticon.css">
      <!-- Google Fonts -->
      <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900%7cOpen+Sans:400,600,700" rel="stylesheet" type="text/css"> 
      <link href="css/nouislider.min.css" rel="stylesheet">
      <!-- Theme Color -->
      <link rel="stylesheet" id="color" href="css/colors/defualt.css">
      <!-- For Style Switcher -->
      <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
      <!-- JavaScripts -->
      <script src="js/modernizr.js"></script>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
   
   <div id="spinner">         
   <div class="spinner-img">            
   <img alt="AdZone Preloader" src="images/loader.gif" />            
   <h2>Lütfen Bekleyin.....</h2>         </div>    
   </div>	  	   <div class="header-top clear">  
   <?php include("view/header.php") ?>		      
   </div>

   
   <section style="padding-top: 15px;padding-bottom: 1px;" class="light-blue">
            <div class="container">
               <div class="row">
                  <?php include("view/islemmenu.php")?>
               </div>
            </div>
         </section>
   
   
   <section class="light-blue">
            <div class="container">
               <div class="row">
               	 
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="dashboard-main-disc">
                        <div class="heading-inner">
                           <p class="title">İlanlarım</p>
                        </div>
						
                        <div class="ad-listing">
                           <div class="all-ads-list-box2">
                             
							 
						

<?php 

$bilgiler=$_COOKIE["kullanici"]; 

 $sql = "SELECT * FROM Users where Fuid='$bilgiler' or Femail='$bilgiler'";
 $result=mysqli_query($con,$sql);
 $row0=mysqli_fetch_array($result,MYSQLI_ASSOC);
 if($row0["Fuid"]=="") /*facebook ile giriş yapmadıysa*/	
 {	
 $uyeid=$row0['UID'];	
 }	
 else{
 $uyeid=$row0['UID'];	
}

 $ilnck=mysqli_query($con,"SELECT * FROM ilan where uyeid='$uyeid' and onay='1'");
 $ilnckp=mysqli_query($con,"SELECT * FROM ilan where uyeid='$uyeid' and onay='0'");
 
$ilbul=mysqli_query($con,"SELECT * FROM il");
$ilcebul=mysqli_query($con,"SELECT * FROM ilce");



$adim = $_GET["durum"];
switch($adim){
case "":

 while($ilnonay=mysqli_fetch_array($ilnck,MYSQLI_ASSOC))
 {
	 
$ilanaktifil1=$ilnonay["il"];
$ilanaktifilce1=$ilnonay["ilce"];

$ilbul1=mysqli_query($con,"SELECT * FROM il where id='$ilanaktifil1'");
$ilcebul1=mysqli_query($con,"SELECT * FROM ilce where id='$ilanaktifilce1'");
	 
$ilsonuc=mysqli_fetch_array($ilbul1);
$ilcesonuc=mysqli_fetch_array($ilcebul1);

	 $ilanid=$ilnonay["ilanid"];
	 $ilanresim=mysqli_query($con,"SELECT * FROM imgilan where ilanid='$ilanid' limit 1");
	 $ilanresimsnc=mysqli_fetch_array($ilanresim,MYSQLI_ASSOC);
	 
	 if($ilanresimsnc=="")
	 {
		$resim="err/resim_yok.jpg";
	 }
	 else{
		 $resim=$ilanresimsnc["url"];
	 }
	
	 
echo '

<div class="col-md-12 ad-box ad-box-2 light-grey">
                                 <div class="col-md-3 col-sm-3 col-xs-12 nopadding">
                                    <div class="comp-logo">
                                       <a href=""><img src="uploads/'.$resim.'" style="min-height: 140px;" class="img-responsive"> </a>
                                    </div>
                                    <div class="ad-price-on-image">
                                       <span class="price"> '.$ilnonay["fiyat"].' TL</span>
                                    </div>
                                 </div>
                                 <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="ad-box-2-detail">
                                       <div class="ad-title-box">
                                          <span class="cat"><i><img src="img/hayvanlar_alemi.png"></i></span>
                                          <div class="ad-title"><a href="ilandetay.php?ilan='.$ilnonay["id"].'"> '.$ilnonay["baslik"].' </a></div>
                                          <div class="ad-title-meta">
                                             <span>
                                             <i class="fa fa-map-marker"></i> '.$ilsonuc["il_adi"].' / '.$ilcesonuc["ilce_adi"].'
                                             </span>
                                             <span>
                                             <i class="fa fa-calendar"></i> '.$ilnonay["tarih"].'
                                             </span>
                                          </div>
                                       </div>
                                       <div class="clearfix"></div>
                                       <div class="ad-bottom-area">
                                          <span> 
                                          <i class="fa fa-tags"></i> Açıklama: '.$ilnonay["aciklama"].'
                                          </span>
                                          <span class="pull-right" style="font-size: 20px;font-weight: 600;color: #03c400;"> Yayında  </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="btn-group" style="display: block;!important">
                                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                    <i class="fa fa-list-ul"></i>
                                    </button>
                                    <div class="dropdown-menu edit-btns">
                                       <a class="dropdown-item" href="">
                                       <span class="btn btn-warning"> 
                                       <i class="fa fa-edit"></i> Düzenle
                                       </span>
                                       </a>
                                       <a class="dropdown-item" href="ilansil.php?ilan='.$ilnonay["ilanid"].'">
                                       <span class="btn btn-danger">
                                       <i class="fa fa-close"></i> 
									   Sil
                                       </span>
                                       </a>
                                    </div>
                                 </div>
                              </div>

';
}

break;
case "aktif": 
 while($ilnonay2=mysqli_fetch_array($ilnck,MYSQLI_ASSOC))
 {
$ilanaktifil=$ilnonay2["il"];
$ilanaktifilce=$ilnonay2["ilce"];

$ilbul2=mysqli_query($con,"SELECT * FROM il where id='$ilanaktifil'");
$ilcebul2=mysqli_query($con,"SELECT * FROM ilce where id='$ilanaktifilce'");
	 
$ilsonuc2=mysqli_fetch_array($ilbul2);
$ilcesonuc2=mysqli_fetch_array($ilcebul2);


 $ilanid=$ilnonay2["ilanid"];
	 $ilanresim=mysqli_query($con,"SELECT * FROM imgilan where ilanid='$ilanid' limit 1");
	 $ilanresimsnc=mysqli_fetch_array($ilanresim,MYSQLI_ASSOC);
	 
	 if($ilanresimsnc=="")
	 {
		$resim="err/resim_yok.jpg";
	 }
	 else{
		 $resim=$ilanresimsnc["url"];
	 }
	 

echo '

<div class="col-md-12 ad-box ad-box-2 light-grey">
                                 <div class="col-md-3 col-sm-3 col-xs-12 nopadding">
                                    <div class="comp-logo">
                                       <a href=""><img src="uploads/'.$resim.'" style="min-height: 140px;" class="img-responsive" > </a>
                                    </div>
                                    <div class="ad-price-on-image">
                                       <span class="price"> '.$ilnonay2["fiyat"].' TL</span>
                                    </div>
                                 </div>
                                 <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="ad-box-2-detail">
                                       <div class="ad-title-box">
                                          <span class="cat"><i><img src="img/hayvanlar_alemi.png"></i></span>
                                          <div class="ad-title"><a href="ilandetay.php?ilan='.$ilnonay2["id"].'"> '.$ilnonay2["baslik"].' </a></div>
                                          <div class="ad-title-meta">
                                             <span>
                                             <i class="fa fa-map-marker"></i> '.$ilsonuc2["il_adi"].' / '.$ilcesonuc2["ilce_adi"].'
                                             </span>
                                             <span>
                                             <i class="fa fa-calendar"></i> '.$ilnonay2["tarih"].'
                                             </span>
                                          </div>
                                       </div>
                                       <div class="clearfix"></div>
                                       <div class="ad-bottom-area">
                                          <span> 
                                          <i class="fa fa-tags"></i> Açıklama: '.$ilnonay2["aciklama"].'
                                          </span>
                                          <span class="pull-right" style="font-size: 20px;font-weight: 600;color: #03c400;"> Yayında  </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="btn-group" style="display: block;!important">
                                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                    <i class="fa fa-list-ul"></i>
                                    </button>
                                    <div class="dropdown-menu edit-btns">
                                       <a class="dropdown-item" href="">
                                       <span class="btn btn-warning"> 
                                       <i class="fa fa-edit"></i> Düzenle
                                       </span>
                                       </a>
                                       <a class="dropdown-item" href="ilansil.php?ilan='.$ilnonay2["ilanid"].'">
                                       <span class="btn btn-danger">
                                       <i class="fa fa-close"></i> 
                                 
									   Sil
									   
                                       </span>
                                       </a>
                                    </div>
                                 </div>
                              </div>

';
}
break;

case "pasif": 
 while($ilanpsf=mysqli_fetch_array($ilnckp,MYSQLI_ASSOC))
 {
	 
$ilanaktifil3=$ilanpsf["il"];
$ilanaktifilce3=$ilanpsf["ilce"];

$ilbul3=mysqli_query($con,"SELECT * FROM il where id='$ilanaktifil3'");
$ilcebul3=mysqli_query($con,"SELECT * FROM ilce where id='$ilanaktifilce3'");
	 
$ilsonuc3=mysqli_fetch_array($ilbul3);
$ilcesonuc3=mysqli_fetch_array($ilcebul3);


     $ilanid=$ilanpsf["ilanid"];
	 $ilanresim=mysqli_query($con,"SELECT * FROM imgilan where ilanid='$ilanid' limit 1");
	 $ilanresimsnc=mysqli_fetch_array($ilanresim,MYSQLI_ASSOC);
	 
	 if($ilanresimsnc=="")
	 {
		$resim="err/resim_yok.jpg";
	 }
	 else{
		 $resim=$ilanresimsnc["url"];
	 }
	 

echo '

<div class="col-md-12 ad-box ad-box-2 light-grey">
                                 <div class="col-md-3 col-sm-3 col-xs-12 nopadding">
                                    <div class="comp-logo">
                                       <a href=""><img src="uploads/'.$resim.'" style="min-height: 140px;" class="img-responsive"> </a>
                                    </div>
                                    <div class="ad-price-on-image">
                                       <span class="price"> '.$ilanpsf["fiyat"].' TL</span>
                                    </div>
                                 </div>
                                 <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="ad-box-2-detail">
                                       <div class="ad-title-box">
                                          <span class="cat"><i><img src="img/hayvanlar_alemi.png"></i></span>
                                          <div class="ad-title"><a href="ilandetay.php?ilan='.$ilanpsf["id"].'"> '.$ilanpsf["baslik"].' </a></div>
                                          <div class="ad-title-meta">
                                             <span>
                                             <i class="fa fa-map-marker"></i> '.$ilsonuc3["il_adi"].' / '.$ilcesonuc3["ilce_adi"].'
                                             </span>
                                             <span>
                                             <i class="fa fa-calendar"></i> '.$ilanpsf["tarih"].'
                                             </span>
                                          </div>
                                       </div>
                                       <div class="clearfix"></div>
                                       <div class="ad-bottom-area">
                                          <span> 
                                          <i class="fa fa-tags"></i> Açıklama: '.$ilanpsf["aciklama"].'
                                          </span>
                                          <span class="pull-right pending"> Onay Bekliyor  </span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="btn-group" style="display: block;!important">
                                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                    <i class="fa fa-list-ul"></i>
                                    </button>
                                    <div class="dropdown-menu edit-btns">
                                       <a class="dropdown-item" href="">
                                       <span class="btn btn-warning"> 
                                       <i class="fa fa-edit"></i> Düzenle
                                       </span>
                                       </a>
                                       <a class="dropdown-item" href="ilansil.php?ilan='.$ilanpsf["ilanid"].'">
                                       <span class="btn btn-danger">
                                       <i class="fa fa-close"></i> 
                                       
									   Sil
									  
                                       </span>
                                       </a>
                                    </div>
                                 </div>
                              </div>

';
 }
break;
}
?>						

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

   <section class="footer-bottom-section light-blue">  
   <div class="container">           
   <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12"> 
   <div class="footer_block">                
   <a href="" class="f_logo"><img src="images/logo.png" class="img-responsive" alt="logo"></a>                  </div>              
   </div>  
   
   <div class="col-md-12 col-sm-12 col-xs-12">  
   <div class="footer-bottom">                  
   <?php include("view/footer.php"); ?>    
   </div>             
   </div> 
   
   </div>       
   </div>     
   </section>
   	        
   <!-- LOGIN MODEL  -->
   <?php include("view/Mlogin.php") ?>       	       
   <!-- REGISTERATION MODEL  -->     
   <?php include("view/Mregister.php") ?> 
   
  <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
         <!-- JAVASCRIPT JS  --> 
      <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script> 
      <!-- JQUERY MIGRATE  --> 
      <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
         <script src="js/modernizr.js"></script>
         <!-- BOOTSTRAP CORE JS -->
         <script type="text/javascript" src="js/bootstrap.min.js"></script>
         <!-- JQUERY SELECT -->
         <script type="text/javascript" src="js/select2.min.js"></script>
         <!-- MEGA MENU -->
         <script type="text/javascript" src="js/bootstrap-dropdownhover.js"></script>
         <!-- JQUERY EASING -->
         <script type="text/javascript" src="js/easing.js"></script>
         <!-- JQUERY COUNTERUP -->
         <script type="text/javascript" src="js/counterup.js"></script>
         <!-- JQUERY WAYPOINT -->
         <script type="text/javascript" src="js/waypoints.min.js"></script>
         <!-- JQUERY REVEAL -->
         <script type="text/javascript" src="js/footer-reveal.min.js"></script>
         <!-- Owl Carousel -->
         <script type="text/javascript" src="js/owl-carousel.js"></script>
         <!-- MOBILE MENU JS -->
         <script type="text/javascript" src="js/jquery.meanmenu.js"></script>
         <!--Style Switcher -->
      <script src="js/color-switcher.js"></script>
      <!-- CORE JS --> 
      <script type="text/javascript" src="js/custom.js"></script>
         <!-- RANGE SLIDER JS -->
         <script src="js/nouislider.min.js"></script>
         <script src="js/wNumb.js"></script>
         <script type="text/javascript">
            (function($) {
                "use strict";
                var slider = document.getElementById('keyboard');
                noUiSlider.create(slider, {
                    start: 10,
                    step: 2,
                    connect: [true, false],
                    range: {
                        'min': 0,
                        'max': 20
                    },
                    format: wNumb({
                        decimals: 3,
                        thousand: '.',
                        prefix: ' Radius  = ',
                        postfix: ' (Km) ',
                    })
                });
                keyboard.noUiSlider.on('update', function(values, handle) {
                    keyboardspan.innerHTML = values[handle];
                });
                var handle = slider.querySelector('.noUi-handle');
            
                handle.setAttribute('tabindex', 0);
            
                handle.addEventListener('click', function() {
                    this.focus();
                });
                handle.addEventListener('keydown', function(e) {
                    var value = Number(slider.noUiSlider.get());
                    switch (e.which) {
                        case 37:
                            slider.noUiSlider.set(value - 10);
                            break;
                        case 39:
                            slider.noUiSlider.set(value + 10);
                            break;
                    }
                });
            })(jQuery);
         </script>
      </div>
   </body>
</html>
<?php  } ?>