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
      <title>Mesaj - Kuspazari.pet</title>
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
	  
	  <style>
	  
.inbox_people {
	background: #fff;
	float: left;
	overflow: hidden;
	width: 30%;
	border-right: 1px solid #ddd;
}

.inbox_msg {
	border: 1px solid #ddd;
	clear: both;
	overflow: hidden;
}

.top_spac {
	margin: 20px 0 0;
}

.recent_heading {
	float: left;
	width: 40%;
}

.srch_bar {
	display: inline-block;
	text-align: right;
	width: 60%;
	padding:
}

.headind_srch {
	padding: 10px 29px 10px 20px;
	overflow: hidden;
	border-bottom: 1px solid #c4c4c4;
}

.recent_heading h4 {
	color: #0465ac;
    font-size: 16px;
    margin: auto;
    line-height: 29px;
}

.srch_bar input {
	outline: none;
	border: 1px solid #cdcdcd;
	border-width: 0 0 1px 0;
	width: 80%;
	padding: 2px 0 4px 6px;
	background: none;
}

.srch_bar .input-group-addon button {
	background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
	border: medium none;
	padding: 0;
	color: #707070;
	font-size: 18px;
}

.srch_bar .input-group-addon {
	margin: 0 0 0 -27px;
}

.chat_ib h5 {
	font-size: 15px;
	color: #464646;
	margin: 0 0 8px 0;
}

.chat_ib h5 span {
	font-size: 13px;
	float: right;
}

.chat_ib p {
    font-size: 12px;
    color: #989898;
    margin: auto;
    display: inline-block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.chat_img {
	float: left;
	width: 11%;
}

.chat_img img {
	width: 100%
}

.chat_ib {
	float: left;
	padding: 0 0 0 15px;
	width: 88%;
}

.chat_people {
	overflow: hidden;
	clear: both;
}

.chat_list {
	border-bottom: 1px solid #ddd;
	margin: 0;
	padding: 18px 16px 10px;
}

.inbox_chat {
	height: 550px;
	overflow-y: scroll;
}

.active_chat {
	background: #e8f6ff;
}

.incoming_msg_img {
	display: inline-block;
	width: 6%;
}

.incoming_msg_img img {
	width: 100%;
}

.received_msg {
	display: inline-block;
	padding: 0 0 0 10px;
	vertical-align: top;
	width: 92%;
}

.received_withd_msg p {
	background: #ebebeb none repeat scroll 0 0;
	border-radius: 0 15px 15px 15px;
	color: #646464;
	font-size: 14px;
	margin: 0;
	padding: 5px 10px 5px 12px;
	width: 100%;
}

.time_date {
	color: #747474;
	display: block;
	font-size: 12px;
	margin: 8px 0 0;
}

.received_withd_msg {
	width: 57%;
}

.mesgs{
	float: left;
	padding: 30px 15px 0 25px;
	width:70%;
}

.sent_msg p {
	background:#0465ac;
	border-radius: 12px 15px 15px 0;
	font-size: 14px;
	margin: 0;
	color: #fff;
	padding: 5px 10px 5px 12px;
	width: 100%;
}

.outgoing_msg {
	overflow: hidden;
	margin: 26px 0 26px;
}

.sent_msg {
	float: right;
	width: 46%;
}

.input_msg_write input {
	background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
	border: medium none;
	color: #4c4c4c;
	font-size: 15px;
	min-height: 48px;
	width: 100%;
	outline:none;
}

.type_msg {
	border-top: 1px solid #c4c4c4;
	position: relative;
}

.msg_send_btn {
	background: #05728f none repeat scroll 0 0;
	border:none;
	border-radius: 50%;
	color: #fff;
	cursor: pointer;
	font-size: 15px;
	height: 33px;
	position: absolute;
	right: 0;
	top: 11px;
	width: 33px;
}

.messaging {
	padding: 0 0 50px 0;
}

.msg_history {
	height: 516px;
	overflow-y: auto;
}
	  </style>
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
               
						   <dl>
						   <?php
$bilgiler=$_COOKIE["kullanici"]; 

$resutl2=mysqli_query($con,"select * from Users where Femail='$bilgiler' or Fuid='$bilgiler'");
$uye=mysqli_fetch_assoc($resutl2);		

				   			
$adim = $_GET["ms"];
switch($adim){
case "": 

  $ilanid=$_GET["il"];// ilan id alındı
  $ilan=mysqli_query($con,"select * from ilan where id='$ilanid'");
  $dtyilan=mysqli_fetch_assoc($ilan);
  $ilansahibi=$dtyilan["uyeid"]; // ilan sahibi id
  
   $uyeid=$uye["UID"];
   $result22=mysqli_query($con,"select DISTINCT ilanid from message where alan_UID='$uyeid' or gonderen_UID='$uyeid'");

echo '
<div class="messaging">
  <div class="inbox_msg">
	<div class="inbox_people">
	  <div class="headind_srch">
		<div class="recent_heading">
		  <h4>Recent</h4>
		</div>
		<div class="srch_bar">
		  <div class="stylish-input-group">
			<input type="text" class="search-bar"  placeholder="Search" >
			</div>
		</div>
	  </div>
	  <div class="inbox_chat scroll">
	  ';
	  
	  while($rows = mysqli_fetch_array($result22)){ 
	  
	  
    $rsilanid = $rows["ilanid"];
	$result3=mysqli_query($con,"select * from ilan where id='$rsilanid'");
	$row3=mysqli_fetch_array($result3);
	$yazi=$row3["baslik"];
	
	$result4=mysqli_query($con,"select * from message where ilanid='$rsilanid'");
	$rows4=mysqli_fetch_array($result4);
	
	$yenibaslik = substr($yazi,0,27);
   echo '
   	<a href="mesaj.php?ms=git&il='.$rows4["ilanid"].'">
		<div class="chat_list">
		  <div class="chat_people">
			<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" > </div>
			<div class="chat_ib">
			  <h5>'.$rows4["gonderen_UID"].'<span class="chat_date"> '.$rows4["tarih"].' </span></h5>
			  <p>'.$yenibaslik.'</p>
			</div>
		  </div>
		</div>
		</a>
   ';
   }

		echo '
		</div>
	  </div>
	</div>
  </div>
</div>';

break;
case "git":

  $ilanid=$_GET["il"];// ilan id alındı
  $ilan=mysqli_query($con,"select * from ilan where id='$ilanid'");
  $dtyilan=mysqli_fetch_assoc($ilan);
  $ilansahibi=$dtyilan["uyeid"]; // ilan sahibi id
  
  
   $uyeid=$uye["UID"];
   $result22=mysqli_query($con,"select DISTINCT ilanid from message where alan_UID='$uyeid' or gonderen_UID='$uyeid'");
echo '
<div class="messaging">
  <div class="inbox_msg">
	<div class="inbox_people">
	  <div class="headind_srch">
		<div class="recent_heading">
		  <h4>Recent</h4>
		</div>
		<div class="srch_bar">
		  <div class="stylish-input-group">
			<input type="text" class="search-bar"  placeholder="Search" >
			</div>
		</div>
	  </div>
	  
	  <div class="inbox_chat scroll">
	  

			  ';
	  
	  while($rows = mysqli_fetch_array($result22)){ 
	  
    $rsilanid = $rows["ilanid"];
	$result3=mysqli_query($con,"select * from ilan where id='$rsilanid'");
	$row3=mysqli_fetch_array($result3);
	$yazi=$row3["baslik"];
	
	$result4=mysqli_query($con,"select * from message where ilanid='$rsilanid'");
	$rows4=mysqli_fetch_array($result4);
	
	$yenibaslik = substr($yazi,0,27);
   echo '
   	<a href="mesaj.php?ms=git&il='.$rows4["ilanid"].'">
		<div class="chat_list">
		  <div class="chat_people">
			<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" > </div>
			<div class="chat_ib">
			  <h5>'.$rows4["gonderen_UID"].'<span class="chat_date"> '.$rows4["tarih"].' </span></h5>
			  <p>'.$yenibaslik.'</p>
			</div>
		  </div>
		</div>
		</a>
   ';
   }

		echo '

		

	  </div>
	</div>

	<div class="mesgs">
	  <div class="msg_history">

<div id="Chat"></div>

	  </div>
	  
	  <div class="type_msg">
		<div class="input_msg_write">
		  <input type="text" name="mesaj" id="mesaj" class="write_msg" placeholder="Type a message" />
		  
		  <button type="submit" name="gonder" id="gonder" class="msg_send_btn"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
		  
		  
		</div>
	  </div>
	</div>
  </div>
</div>';
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
	<script>
var Last = "";
var Kime = "<?php echo $ilansahibi; ?>";
var Kimden = "<?php echo $uye["UID"]; ?>";
var İlanId = "<?php echo $ilanid ?>";
function Yukle(){
	$.ajax({
			method: "POST",
			url: "mess.php",
			data: {
				"a" : "eski",
				"kime" : Kime,
				"kimden" : Kimden,
				"ilanid" : İlanId
			},
			success: function(Cevap) {
				$("#LastID_Message").remove();
				$(".msg_history").append(Cevap).delay(1000).scrollTop($('.msg_history')[0].scrollHeight);
			}
	});
	
}
function Guncelle(){ // not work
	Last = $("#LastID_Message").text();
	$.ajax({
		method: "POST",
		url: "mess.php",
		data: {
			"a" : "guncelle",
			"kime" : Kime,
			"kimden" : Kimden,
			"ilanid" : İlanId,
			"sonmesaj" : Last
		},
		success: function(Cevap) {
			if(Cevap != ''){
				$("#LastID_Message").remove();
				$(".msg_history").append(Cevap).delay(1000).scrollTop($('.msg_history')[0].scrollHeight);
			}
		}
	});
}
function Gonder() {
		Mesaj = $("#mesaj").val();
		$("#mesaj").val("");
		if (Kime != '' && Kimden != '' && Mesaj != ''){
		$.ajax({
			method: "POST",
			url: "mess.php",
			data: {
				"a" : "yeni",
				"kime" : Kime,
				"kimden" : Kimden,
				"mesaj" : Mesaj,
				"ilanid" : İlanId
			},
			success: function(Cevap) {
				$("#LastID_Message").remove();
				$(".msg_history").append(Cevap).delay(1000).scrollTop($('.msg_history')[0].scrollHeight);
			}
		});
		}
}
$(function() {
	Yukle();
	$("#gonder").click(function() {
		Gonder();
	});
	setInterval(Guncelle, 3000);
});
</script>
      </div>
   </body>
</html>
<?php  } ?>