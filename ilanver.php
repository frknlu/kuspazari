<?php include("baglanti.php");
 $bilgiler=$_COOKIE["kullanici"]; 
 header('X-XSS-Protection: 0');
 if($bilgiler==""){
	 header("Refresh:0; url=index.php");
 }
 else{ 
$randomvarmi=$_COOKIE["random"];
if($randomvarmi==""){
		header("Refresh:0; url=ilanvercode.php");
	}
	else{
		$grubidol=$_COOKIE["random"];
	}
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
      <title>İlan Ver Ücretsiz - Kuşpazari.pet</title>
      <link rel="icon" href="images/favicon.ico" type="image/x-icon">
	  
	  <!-- TEMPLATE CORE CSS -->
      <link rel="stylesheet" href="css/style.css">
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
      
      <!-- MOBILE MENU CSS -->
      <link href="css/meanmenu.min.css" rel="stylesheet">
	  
	  
      <!-- FONT AWESOME -->
      <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/et-line-fonts.css" type="text/css">
      <link rel="stylesheet" type="text/css" href="fonts/classified/flaticon.css">
      <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900%7cOpen+Sans:400,600,700" rel="stylesheet" type="text/css"> 
      <!-- Theme Color -->
      <link rel="stylesheet" id="color" href="css/colors/defualt.css">
      <!-- For Style Switcher -->
      <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
      <!-- JavaScripts -->
      <script src="js/modernizr.js"></script>
      <link rel="stylesheet" href="css/dropzone.css">
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
   <h2>Lütfen Bekleyin.....</h2>         
   </div>    
   </div>	  	   
   <div class="header-top clear">  
   <?php include("view/header.php") ?>		      
   </div>
   <section class="light-blue">
            <div class="container">
               <div class="row">
                  
                  <div class="col-md-10 col-sm-10 col-xs-12 nopadding col-md-offset-1">
                     <div class="post-ad-box post-ad-box3">

                       <form action="ilanislem.php" method="post">
					   
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="ad-detail-heading">
                                 <h4>İLAN DETAYLARI <div style="text-align: right;">İlan Kodunuz: <?php echo $grubidol ?></div></h4>
                              </div>
                           </div>
<style>
.imagebacked {
background-repeat:no-repeat;
	background-position:bottom left;
	padding-left:30px;
}
</style>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">Kuş Türü</label>
                                 <div class="col-sm-8">
                                    <select name="kusturu" class="select-general form-control" required>
									<option label="Select Option"></option>
									<?php 								
$kusturu = mysqli_query($con,"SELECT * FROM kusturu");
									while ($kussnc=mysqli_fetch_array($kusturu,MYSQLI_ASSOC)){
										echo '<option data-foo="bar" value="'.$kussnc["adi"].'">		
										<span><img class="flag" src="'.$kussnc["img"].'"/>  '.$kussnc["adi"].' </span>
										</option>';
									}
									?>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">İlan Başlığı</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" name="baslik" maxlength="30" placeholder="İlan Başlığı Giriniz" value="" required>
                                 </div>
                              </div>
                           </div>
                          
						  <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">İlan Açıklama</label>
                                 <div class="col-sm-8">
									 <textarea class="form-control" name="aciklama" placeholder="İlan Açıklama Giriniz" value="" maxlength="300" rows="2"></textarea>
                                 </div>
                              </div>
                           </div>
						  
						  <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label class="col-sm-4 col-form-label">Fiyat</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" name="fiyat" maxlength="6" placeholder="100 TL" value="" required>
                                 </div>
                              </div>
                           </div>
						  
						  <div id="visiblityDivId" style="display: none;">
						  <input type="text" class="form-control" name="ilanid" value="<?php echo $grubidol?>" required>
						  </div>
						  
						  
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">Cinsiyet</label>
                                 <div class="col-sm-8">
                                    <select name="cinsiyet" class="select-general form-control" required>
                                       <option label="Select Option"></option>
                                       <option value="0">Tek Erkek</option>
                                       <option value="1">Tek Dişi</option>
                                       <option value="2">Çift</option>
                                       <option value="3">Toptan</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
						  
						  
						  <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">Yaş</label>
                                 <div class="col-sm-8">
                                    <select name="yas" class="select-general form-control" required>
                                       <option label="Select Option"></option>
                                       <option value="1 Aylık">1 Aylık</option>
                                       <option value="2 Aylık">2 Aylık</option>
									   <option value="3 Aylık">3 Aylık</option>
									   <option value="4 Aylık">4 Aylık</option>
									   <option value="5 Aylık">5 Aylık</option>
									   <option value="6 Aylık">6 Aylık</option>
									   <option value="7 Aylık">7 Aylık</option>
									   <option value="8 Aylık">8 Aylık</option>
									   <option value="9 Aylık">9 Aylık</option>
									   <option value="10 Aylık">10 Aylık</option>
									   <option value="11 Aylık">11 Aylık</option>
									   <option value="1 Yaşında">1 Yaşında</option>
									   <option value="2 Yaşında">2 Yaşında</option>
									   <option value="3 Yaşında">3 Yaşında</option>
									   <option value="4 Yaşında">4 Yaşında</option>
									   <option value="5 Yaşında">5 Yaşında</option>
									   <option value="6 Yaşında">6 Yaşında</option>
									   <option value="7 Yaşında">7 Yaşında</option>
									   <option value="8 Yaşında">8 Yaşında</option>
									   <option value="9 Yaşında">9 Yaşında</option>
									   <option value="10 Yaşında">10 Yaşında</option>
									   <option value="11 Yaşında">11 Yaşında</option>
									   <option value="12 Yaşında">12 Yaşında</option>
									   <option value="13 Yaşında">13 Yaşında</option>
									   <option value="14 Yaşında">14 Yaşında</option>
									   <option value="15 Yaşında">15 Yaşında</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
						  
						  
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
$resutl2=mysqli_query($con,"select * from Users where UID='$uyeid'");
$uye=mysqli_fetch_array($resutl2,MYSQLI_ASSOC);
//require_once("mysql.php");
		?>				  
						  
						  
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                             
							 <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">İl</label>
                                 <div class="col-sm-8">
<select class="select-general form-control" id="il" name="il" required>
<option value="0">Şehir Seçiniz</option>
								 <?php 							 
$ilbul=mysqli_query($con,"SELECT * FROM il");
while($ilsonuc=mysqli_fetch_array($ilbul,MYSQLI_ASSOC))
{
								 if($ilsonuc["id"]==$uye["il"])
								 {
								   echo ' <option value="'.$uye["il"].'" selected>'.$ilsonuc["il_adi"].'</option>';
								 }
}     			
						$ilbuld=mysqli_query($con,"SELECT id,il_adi FROM il ORDER BY id ASC");
						while($ilsonucd=mysqli_fetch_array($ilbuld,MYSQLI_ASSOC))
						{
							
							echo '<option value="'.$ilsonucd['id'].'">'.$ilsonucd['il_adi'].'</option>';    
						}
						
						
						
								 ?>
								</select>
                                 </div>
                              </div>
							  
							   <div class="form-group">
                                 <label  class="col-sm-4 col-form-label">İlçe</label>
                                 <div class="col-sm-8">
                                    
									 <select name="ilce" id="ilce" class="select-general form-control" required>
                    <option value="0">İlçe Seçiniz</option>
					<?php 
$ilcebul=mysqli_query($con,"SELECT * FROM ilce");
while($ilcesonuc=mysqli_fetch_array($ilcebul,MYSQLI_ASSOC))
{
                                if($ilcesonuc["id"]==$uye["ilce"])
								 {
								echo ' <option value="'.$uye["ilce"].'" selected>'.$ilcesonuc["ilce_adi"].'</option>';
								 }						 
}
					?>
                </select>
									
                                 </div>
                              </div>
                           </div>
						   
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="ad-detail-heading">
                                 <h4>İletişim Bilgilerim</h4>
                              </div>
                           </div>

                          
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label class="col-sm-4 col-form-label">Ad Soyad</label>
                                 <div class="col-sm-8">
                                 <label class="col-sm-4 col-form-label"><?php echo $uye["Ffname"]; ?></label>
                                 </div>
                              </div>
                           </div>
                           
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label class="col-sm-4 col-form-label">Telefon: <?php echo $uye["tel"]; ?></label>
								 
								 <div class="col-sm-8">
                                    <input name="gnumaraonay" checked data-toggle="toggle" data-on="Görünsün" data-style="slow android" data-onstyle="success" data-off="Görünmesin" type="checkbox">
                                 </div>
								 
                              </div>
                           </div>

                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="ad-detail-heading">
                                 <h4>Fotoğraf Ekle (Çoklu Fotoğraf Ekleyebilirsiniz) </h4>
                              </div>
                           </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group uploadImages">
                                 <div class="col-sm-12 col-md-12">
                                    <div id="upload-ad-images" class="dropzone"></div>
                                 </div>
                              </div>
                           </div>
						   
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group">
                                 <label class="col-sm-4 col-form-label">Video URL ( youtube )</label>
                                 <div class="col-sm-8">
                                    <input type="text" class="form-control" name="url" placeholder="Örnek https://www.youtube.com/watch?v=wQ4hr-6KJmY">
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="checkbox">
                                 <label>
                                    <input type="checkbox" value="" checked>
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    <span>Tıklayarak <a href="privacypolicy.php">Şartlar Ve Koşullarımız</a> İle<a href="" > Gönderme Kurallarımızı</a> Kabul Etmiş Olursunuz. </span>
                                 </label>
                              </div>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 nopadding">
                              <div class="form-group form-action">
							  
							  <button class="btn btn-default pull-right" type="submit" ><i class="fa fa-angle-double-right"></i> İlanı Yayınla</button>
							  
                              </div>
                           </div>
						   
                        </form>
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
   <a href="" class="f_logo"><img src="images/logo.png" class="img-responsive" alt="logo"></a>             
   </div>              
   </div>  
   <div class="col-md-12 col-sm-12 col-xs-12">  
   <div class="footer-bottom">                  
<?php include("view/footer.php"); ?>
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
         <!-- DROPZONE JS -->
         <script src="js/dropzone.js"></script>
         <script src="js/form-dropzone.js"></script>
      <!-- CORE JS --> 
      <script type="text/javascript" src="js/custom.js"></script>
         <!-- FOR THIS PAGE ONLY -->
         <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
         <script type="text/javascript">
		 
			/*-- ------- create remove function in dropzone ------ --*/
			 Dropzone.autoDiscover = false;
			var acceptedFileTypes = "image/*"; //dropzone requires this param be a comma separated list
			var fileList = new Array;
			var i = 0;
			$("#upload-ad-images").dropzone({
				addRemoveLinks: true,
				maxFiles: 5, //change limit as per your requirements
				acceptedFiles: '.jpeg,.jpg,.png',
				dictMaxFilesExceeded: "Resim limitine ulaştınız.",
				acceptedFiles: acceptedFileTypes,
				url: "ilanver.php",
				dictInvalidFileType: "Sadece JPG/PNG",
				init: function () {
					// Hack: Add the dropzone class to the element
					$(this.element).addClass("dropzone");
				}
				
			});
         </script>
		 <?php
$bilgiler=$_COOKIE["kullanici"]; 

$uyebilg = mysqli_query($con,"SELECT * FROM Users where Fuid='$bilgiler' or Femail='$bilgiler'");
$uyesonuc = mysqli_fetch_array($uyebilg,MYSQLI_ASSOC);

$uyeid=$uyesonuc["UID"];


if(!empty($_FILES)){
	
	$targetDir = "uploads/";

	$fileName = trim(str_replace(" ","_", "ilan-".$uyeid."-".$grubidol."-".$_FILES['file']['name']));
	
	$targetFile = $targetDir.$fileName;
	
	if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){
		mysqli_query($con,"INSERT INTO imgilan (ilanid,url) VALUES ('$grubidol','$fileName')");
	}

}
		 ?>

    
	<script src="selectchained.js" type="text/javascript"></script>
    <script>
	$("#ilce").remoteChained("#il", "smtr.php");
    </script>
	
      </div>
   </body>
</html>
<?php  } ?>