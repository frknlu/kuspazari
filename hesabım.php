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
      <title>Hesabım - Kuspazari.pet</title>
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

	  <link rel="stylesheet" id="theme-color" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/css/bootstrap-formhelpers.css" />

	  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.js"></script>

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

   <section class="dashboard light-blue">
            <div class="container">
               <div class="row">
               	  
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="dashboard-main-disc">

                        <div class="meta-detail">
                           <div class="heading-inner">
                              <p class="title">Hesab Bilgilerim</p>
                           </div>
						   <dl>
						   <?php
$bilgiler=$_COOKIE["kullanici"]; 

 $sql = "SELECT * FROM Users where Fuid='$bilgiler' or Femail='$bilgiler'";
 $result=mysqli_query($con,$sql);
 $row0=mysqli_fetch_array($result,MYSQLI_ASSOC);
 
 if($row0["Fuid"]=="") /*facebook ile giriş yapmadıysa*/	
 {	
 $uyeid=$row0['UID'];	
 $fbbg="Bağlı Değil";
 }	
 else{
 $uyeid=$row0['UID'];	
 $fbbg='<a href="https://www.facebook.com/profile.php?id='.$row0['Fuid'].'">'.$row0["Ffname"].'</a>';
 }

$resutl2=mysqli_query($con,"select * from Users where UID='$uyeid' ");
$uye=mysqli_fetch_assoc($resutl2);		

$uyeil=$uye["il"];
 $uyeilce=$uye["ilce"];
 
$ilbul=mysqli_query($con,"SELECT * FROM il where id='$uyeil'"); /*il*/
$ilsonuc=mysqli_fetch_assoc($ilbul);

if(isset($ilsonuc))
{
$uyeiladi=$ilsonuc["il_adi"];
}
else{
	$uyeiladi="Bilgilerinizi Güncelleyiniz";
}
 
 
$ilcebul=mysqli_query($con,"SELECT * FROM ilce where id='$uyeilce'");
$ilcesonuc=mysqli_fetch_assoc($ilcebul);
if(isset($ilcesonuc))
{
$uyeilceadi=$ilcesonuc["ilce_adi"];

}
else{
	$uyeilceadi="Bilgilerinizi Güncelleyiniz";
}			   					   
						   	
$adim = $_GET["islem"];
switch($adim){
case "": 

echo '
                              <dt><i class="fa fa-user"></i></dt>
                              <dd style="height:52px!important;">'.$uye["Ffname"].'</dd>
							';  
							
if($row0["Fuid"]=="") /*facebook ile giriş yapmadıysa*/	
 {	
echo '
							  <dt><i class="fa fa-envelope"></i></dt>
                              <dd style="height:52px!important;">'.$uye["Femail"].'</dd>
 ';
 }
 
 echo '
                              <dt><i class="fa fa-phone"></i></dt>
                              <dd style="height:52px!important;">'.$uye["tel"].' </dd>
							  
                              <dt><i class="fa fa-flag"></i></dt>
                              <dd style="height:52px!important;">'.$uyeiladi.' </dd>
							  
                              <dt><i class="fa fa-flag"></i></dt>
                              <dd style="height:52px!important;">'.$uyeilceadi.' </dd>
							  
							  <dt><i class="fa fa-facebook "></i></dt>
                              <dd style="height:52px!important;">'.$fbbg.' </dd>

';
break;

case "duzenle": 


 if($row0["Fuid"]=="") /*facebook ile giriş yapmadıysa*/	
 {	
 
 /*
 
 <dt><i class="fa fa-envelope"></i></dt>
               <dd style="height:52px!important;">
			   <input type="email" class="form-control" name="email" value="'.$uye["Femail"].'" required></dd>
 */
echo '
<form action="hesabım.php?islem=onay" method="post">  

                              <dt><i class="fa fa-user"></i></dt>
       
	   <dd style="height:52px!important;"><input type="text" class="form-control" name="isim" Placeholder="Ad Soyad" value="'.$uye["Ffname"].'" required></dd>					  
							  

                              <dt><i class="fa fa-phone"></i></dt>
                              <dd style="height:52px!important;"><input class="form-control input-medium bfh-phone" data-format="0 (ddd) ddd-dddd" type="text" maxlength="13" name="tel" value="'.$uye["tel"].'" required></dd>

						  
';
	 
	echo '
	
	 <dt><i class="fa fa-flag"></i></dt>
	 
	 <dd style="height:52px!important;">
                <select id="il" name="il">
                	<option value="0">Şehir Seçiniz</option>
					<option value="'.$uye["il"].'" selected>'.$uyeiladi.'</option>
					'; 
					
						$ilbuld=mysqli_query($con,"SELECT id,il_adi FROM il ORDER BY id ASC");
						while($ilsonucd=mysqli_fetch_array($ilbuld,MYSQLI_ASSOC))
						{
							
							echo '<option value="'.$ilsonucd['id'].'">'.$ilsonucd['il_adi'].'</option>';    
						}
					
					echo '
                </select>
				</dd>
				
                
				 <dt><i class="fa fa-flag"></i></dt>
				 <dd style="height:52px!important;">
                <select name="ilce" id="ilce">
                    <option value="0">İlçe Seçiniz</option>
					<option value="'.$uye["ilce"].'" selected>'.$uyeilceadi.'</option>
                </select>
                </dd>
         
		 <div class="pull-right"><button type="submit" class="btn btn-success" style="
    height: 50px;
    width: 100px;
    font-size: 25px;
    ">Kayıt Et</button></div>
		 </form>
			   ';


 }
 
 /* facebook ile giriş yapıldıysa*/
 else{
	 
	 echo'
	                          
						<form action="hesabım.php?islem=onay" method="post">  
                              <dt><i class="fa fa-phone"></i></dt>
                              <dd style="height:52px!important;"><input class="input-medium bfh-phone" data-format="0 (ddd) ddd-dddd" type="text" maxlength="13" name="tel" value="'.$uye["tel"].'" required></dd>
							  
	 ';
	 
	echo '
	
	 <dt><i class="fa fa-flag"></i></dt>
	 
	 <dd style="height:52px!important;">
                <select id="il" name="il">
                	<option value="0">Şehir Seçiniz</option>

					<option value="'.$uye["il"].'" selected>'.$uyeiladi.'</option>
					'; 
	 					
						$ilbuld=mysqli_query($con,"SELECT id,il_adi FROM il ORDER BY id ASC");
						while($ilsonucd=mysqli_fetch_array($ilbuld,MYSQLI_ASSOC))
						{
							
							echo '<option value="'.$ilsonucd['id'].'">'.$ilsonucd['il_adi'].'</option>';    
						}
					
					echo '
                </select>
				</dd>
				
                
				 <dt><i class="fa fa-flag"></i></dt>
				 <dd style="height:52px!important;">
                <select name="ilce" id="ilce">
                    <option value="0">İlçe Seçiniz</option>
					<option value="'.$uye["ilce"].'" selected>'.$uyeilceadi.'</option>
                </select>
                </dd>
         
		<div class="pull-right"><button type="submit" class="btn btn-success" style="
    height: 50px;
    width: 100px;
    font-size: 25px;
    ">Kayıt Et</button></div>
		 </form>
			   ';
			   
 }

break;
case "onay";

$isim= $_POST["isim"];
/*$email= $_POST["email"];*/
$tel= $_POST["tel"];
$il= $_POST["il"];
$ilce= $_POST["ilce"];	

 if($row0["Fuid"]=="") /*facebook ile giriş yapmadıysa*/	
 {	

 mysqli_query($con,"UPDATE Users SET Ffname='$isim',tel='$tel',il='$il',ilce='$ilce' WHERE UID='$uyeid'");/*,Femail='$email'*/
echo '<script type="text/javascript">';
        echo 'window.location.href="hesabım.php";';
        echo '</script>';
 }	
 else{

 mysqli_query($con,"UPDATE Users SET tel='$tel',il='$il',ilce='$ilce' WHERE UID='$uyeid'");
 
 echo '<script type="text/javascript">';
        echo 'window.location.href="hesabım.php";';
        echo '</script>';
}	
	    echo '<script type="text/javascript">';
        echo 'window.location.href="hesabım.php";';
        echo '</script>';


break;

}
						   ?>						   
</dl>						   
						   
						   
                           
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
		 
	<script src="selectchained.js" type="text/javascript"></script>
    <script>
	$("#ilce").remoteChained("#il", "smtr.php");
    </script>
      </div>
   </body>
</html>
<?php  } ?>