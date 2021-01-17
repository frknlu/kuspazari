<?php include("baglanti.php");?>
<!DOCTYPE html>
<html lang="tr">
   <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
   <?php  
  $ilanid=$_GET["ilan"];

  $ilan=mysqli_query($con,"select * from ilan where id='$ilanid'");
  $dtyilan=mysqli_fetch_assoc($ilan);
  
   if(!empty($dtyilan["id"])){}
  else{
	  header("Location: /errors/add.php");
  }
  
  $ilansahibi=$dtyilan["uyeid"];
  $ilansbul=mysqli_query($con,"select * from Users where UID='$ilansahibi'");
  $ilansahibisnc=mysqli_fetch_assoc($ilansbul);
  

  mysqli_query($con,"UPDATE ilan SET hit=hit+1 WHERE id='$ilanid'");

  
   $numaraonay=$dtyilan["gnumara"]; 
   
   
   if($numaraonay==1){
	   $tel=$ilansahibisnc["tel"];
   }
   else{
	   $tel="Gizli";
   }
   
   $ilid=$dtyilan["il"];
   $ilceid=$dtyilan["ilce"];
   
   $il = mysqli_query($con,"SELECT * FROM il where id='$ilid'");
   $ilcek=mysqli_fetch_array($il,MYSQLI_ASSOC);
   
   
   $ilce = mysqli_query($con,"SELECT * FROM ilce where id='$ilceid'");
   $ilcecek=mysqli_fetch_array($ilce,MYSQLI_ASSOC);
   
   $cinsiyet=$dtyilan["cinsiyet"];
	
   if($cinsiyet==0)
   {
	   $cinsiyeti="Tek Erkek";
   }
   else if($cinsiyet==1)
   {
	   $cinsiyeti="Tek Dişi";   
   }
   else if($cinsiyet==2)
   {
	   $cinsiyeti="Çift";
   }
   else if($cinsiyet==3)
   {
	   $cinsiyeti="Toptan";
   }
  
  
  $aylar = array(
    'Ocak',
    'Şubat',
    'Mart',
    'Nisan',
    'Mayıs',
    'Haziran',
    'Temmuz',
    'Ağustos',
    'Eylül',
    'Ekim',
    'Kasım',
    'Aralık'
);

$ay = $aylar[date('m', strtotime($dtyilan["tarih"])) - 1];

$ksturs=$dtyilan["kusturu"];
$kusturux = mysqli_query($con,"SELECT * FROM kusturu where adi='$ksturs'");
$kussnc=mysqli_fetch_array($kusturux,MYSQLI_ASSOC); 


$ilanresimid=$dtyilan["ilanid"];


  ?> 
   <title><?php echo ''.$dtyilan["baslik"].' '.$dtyilan["kusturu"].' ' ?>kuşu ilanı - Kuspazari.pet</title>   

<!-- Seo -->
    <meta name="GOOGLEBOT" content="INDEX, FOLLOW">
	<meta name="GOOGLEBOT" content="SNIPPET">
	<meta name="GOOGLEBOT" content="ARCHIVE">
    <meta name="ROBOTS" content="INDEX, FOLLOW"> 
	<meta name="ROBOTS" content="ARCHIVE">
	<meta name="robots" content="noodp, noydir">
	<meta content="0" http-equiv="EXPIRES">
	<link rel="alternate" hreflang="Tr" href="www./" />
	<meta name="Resource-type" content="Document">
	<meta name="document-class" content="Published">
	<meta name="document-classification" content="Design">
	<meta name="document-rights" content="Copyrighted Work">
	<meta name="document-distribution" content="Global">
	<meta name="document-state" content="Static">
	<meta name="revisit-after" content="1 days">
	<meta name="author" content="SherLock Medya">
	<meta name="content-language" content="tr">
	<meta http-equiv="reply-to" content="destek@kuspazari.pet">
	<meta name="Reply-to" content="destek@kuspazari.pet">
	<meta name="copyright" content="2015 ©  All rights reserved"/>

   <!-- Favicons Icon -->
   <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
   <!-- Mobile Specific -->      
   <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">      
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
   <!-- JavaScripts -->      
   <script src="js/modernizr.js"></script>      
   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->      
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->      
   <!--[if lt IE 9]>      
   <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>      
   <![endif]-->   

   </head>   
   <body>         
   <div id="spinner">         
   <div class="spinner-img">            
   <img alt="Kuspazari.pet" src="images/loader.gif" />            
   <h2>Lütfen Bekleyin.....</h2>         </div>    
   </div>	  	   <div class="header-top clear">  
   <?php include("view/header.php") ?>		      
   </div>
   <section class="ad-listing-single">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="detail-titile light-blue">
                        <div class="row">
                           <div class="col-xs-12 col-sm-9">
                              <div class="cat-icon">
                             <i> <?php echo '<img class="flag" src="'.$kussnc["img"].'"/>'; ?> </i><!-- kus türü -->
                              </div>
                              <div class="ad-name">
                                 <h3 class=""><?php echo $dtyilan["baslik"] ?></h3>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-3">
                              <div class="price"><?php echo $dtyilan["fiyat"] ?> TL</div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12 nopaddingright">
    <script type="text/javascript" src="js/jssor.slider.min.js"></script>
    
    <script>
        jssor_slider1_init = function () {
            var options = {
                $AutoPlay: 0,                               
                $Idle: 4000,                   
                $SlideDuration: 500,                             
                $DragOrientation: 1, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)
                $UISearchMode: 0,   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $Loop: 1,                                       //[Optional] Enable loop(circular) of carousel or not, 0: stop, 1: loop, default value is 1
                    $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $Steps: 6                                       //[Optional] Steps to go for each navigation request, default value is 1
                    }
                }
            };

            var jssor_slider1 = new $JssorSlider$('slider1_container', options);

            /*#region responsive code begin*/
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, 720));
                else
                    $Jssor$.$Delay(ScaleSlider, 30);
            }

            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);

            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    
    <div id="slider1_container" style="position: relative; width: 720px;
        height: 480px; overflow: hidden;">

        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="svg/loading/static-svg/spin.svg" />
        </div>
		
        <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 720px; height: 480px;
            overflow: hidden;">
			
			<?php
			
$ilanresimv=mysqli_query($con,"SELECT * FROM imgilan where ilanid='$ilanresimid'");			
$ilanvarmiyk=mysqli_fetch_array($ilanresimv,MYSQLI_ASSOC);	
		
if($ilanvarmiyk<=0){
	echo ' 
		 <div>
                <img data-u="image" src="uploads/err/resim_yok.jpg" alt="'.$dtyilan["baslik"].'" />
         </div>';
}
else{
	$ilanresim=mysqli_query($con,"SELECT * FROM imgilan where ilanid='$ilanresimid'");
	
	while($ilanresimsnc=mysqli_fetch_array($ilanresim,MYSQLI_ASSOC))
	{
//image
		echo '
		 <div>
                <center><img data-u="images" src="uploads/'.$ilanresimsnc["url"].'" alt="'.$dtyilan["baslik"].' '.$dtyilan["kusturu"].' kuşu ilanı - Kuspazari.pet" 
				border="0" style="top: 0px; left: 0px; width: auto; height: 480px; display: block; z-index: 1;"
				data-display="block"
				/></center>
                <img data-u="thumb" src="uploads/'.$ilanresimsnc["url"].'" alt="'.$dtyilan["baslik"].' '.$dtyilan["kusturu"].' kuşu ilanı - Kuspazari.pet"/>
         </div>
		
		';
	}
	
	
}		
			

			?>

        </div>

        <style>
            /* jssor slider loading skin spin css */
            .jssorl-009-spin img {
                animation-name: jssorl-009-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            @keyframes jssorl-009-spin {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }

            /* jssor slider thumbnail navigator skin 07 css */
            /*
            .jssort07 .p            (normal)
            .jssort07 .p:hover      (normal mouseover)
            .jssort07 .pav          (active)
            .jssort07 .pav:hover    (active mouseover)
            .jssort07 .pdn          (mousedown)
            */
            .jssort07 {
                position: absolute;
                /* size of thumbnail navigator container */
                width: 800px;
                height: 100px;
            }

                .jssort07 .p {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 99px;
                    height: 66px;
                }

                .jssort07 .i {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 99px;
                    height: 66px;
                    filter: alpha(opacity=80);
                    opacity: .8;
                }

                .jssort07 .p:hover .i, .jssort07 .pav .i {
                    filter: alpha(opacity=100);
                    opacity: 1;
                }

                .jssort07 .o {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 97px;
                    height: 64px;
                    border: 1px solid #000;
                    box-sizing: content-box;
                    transition: border-color .6s;
                    -moz-transition: border-color .6s;
                    -webkit-transition: border-color .6s;
                    -o-transition: border-color .6s;
                }

                .jssort07 .pav .o {
                    border-color: #0099ff;
                }

                .jssort07 .p:hover .o {
                    border-color: #fff;
                    transition: none;
                    -moz-transition: none;
                    -webkit-transition: none;
                    -o-transition: none;
                }

                .jssort07 .p.pdn .o {
                    border-color: #0099ff;
                }

                * html .jssort07 .o {
                    /* ie quirks mode adjust */
                    width /**/: 99px;
                    height /**/: 66px;
                }
        </style>
        <!-- thumbnail navigator container -->
        <div data-u="thumbnavigator" class="jssort07" style="width: 720px; height: 100px; left: 0px; bottom: 0px;">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div data-u="thumbnailtemplate" class="i"></div>
                    <div class="o"></div>
                </div>
            </div>

            <style>
                .jssora051 {display:block;position:absolute;cursor:pointer;}
                .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
                .jssora051:hover {opacity:.8;}
                .jssora051.jssora051dn {opacity:.5;}
                .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
            </style>
            <div data-u="arrowleft" class="jssora051" style="width:40px;height:40px;top:123px;left:8px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:40px;height:40px;top:123px;right:8px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
            <!--#endregion Arrow Navigator Skin End -->

        </div>
        <!--#endregion Thumbnail Navigator Skin End -->

        <!-- Trigger -->
        <script>
            jssor_slider1_init();
        </script>

    </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12 nopaddingleft">
                           <div class="ad-detail">
                              <div class="ad-detail-title">
                                 <h3><i class=" icon-layers"></i> İlan Detay</h3>
                              </div>
                              <div class="ad-detail-desc light-blue ">
                                 <ul>
                                    <li>
                                       <span class="pull-left">İlan Tarihi</span>
                                       <span class="pull-right"><?php echo date('d ', strtotime($dtyilan["tarih"])). $ay .date(' Y', strtotime($dtyilan["tarih"])); ?></span>
                                    </li>
									  <li>
                                       <span class="pull-left">Tür</span>
                                       <span class="pull-right"><?php echo $dtyilan["kusturu"]; ?></span>
                                    </li>
									  <li>
                                       <span class="pull-left">Cinsiyet</span>
                                       <span class="pull-right"><?php echo $cinsiyeti ?></span>
                                    </li>
									 <li>
                                       <span class="pull-left">Yaş</span>
                                       <span class="pull-right"><?php echo $dtyilan["yas"]; ?></span>
                                    </li>

                                    <li>
                                       <span class="pull-left">Telefon</span>
                                       <span class="pull-right"><?php echo $tel ?></span>
                                    </li>
                                    <li>
                                       <span class="pull-left">Adres</span>
                                       <span class="pull-right"><?php echo $ilcek["il_adi"]; ?> / <?php echo $ilcecek["ilce_adi"]; ?></span>
                                    </li>
                                    <li>
                                       <span class="pull-left">Görüntülenme</span>
                                       <span class="pull-right"><?php echo $dtyilan["hit"]; ?></span>
                                    </li>
                                 </ul>
                              </div>
                              <div class="ad-detail-title">
                                 <h3> <i class="icon-profile-male"></i> İlan Sahibi </h3>
                              </div>
                              <div class="business-card light-blue ">
                                 <div class="media">
                                    <div class="media-left">
                                       <img class="media-object img-circle profile-img" alt="" src="images/default-avatar.png">
                                    </div>
                                    <div class="media-body">
                                       <h3 class="media-heading"><?php echo $ilansahibisnc["Ffname"] ?></h3>
                                      <a href="mesaj.php?ms=git&il=<?php echo $dtyilan["id"]; ?>">Mesaj</a>			  
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-8 col-sm-12 col-sm-12">
                           <div class="heading-inner">
                              <p class="title">Açıklama</p>
                           </div>
                           <p>
                             <?php echo $dtyilan["aciklama"] ?>
                           </p>

                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
   <section class="light-blue nopadding">  
   <div class="container">
   <div class="row">         
   <div class="col-md-12 col-sm-12 col-xs-12"> 
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
   <div class="row">                     
   <div class="col-md-12 col-sm-12 col-xs-12"> 
   <p>Copyright ©2012 - All rights Reserved. Made By <a href="https://www.sherlockmedya.com">sherlockmedya.com || e-kusum.com ||</a> Copyright © Kuspazari.pet 2018</p>                       
   </div>                    
   </div>            
   </div>             
   </div> 
   
   </div>       
   </div>     
   </section>
   
   <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>	        
   <!-- LOGIN MODEL  -->
   <?php include("view/Mlogin.php") ?>       	       
   <!-- REGISTERATION MODEL  -->     
   <?php include("view/Mregister.php") ?> 	        
   <!-- JAVASCRIPT JS  -->
   <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>       
   <!-- JQUERY MIGRATE  --> 
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>       
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
   <!-- CORE JS -->    
   <script type="text/javascript" src="js/custom.js"></script>    
  
   </body></html>