<?php 

include("../baglanti.php");
 header('X-XSS-Protection: 0');
 
ob_start();
session_start();

if(!isset($_SESSION["login"])){
    header("Location:index.php");
}
else {
  ?>
  
  
  

<!DOCTYPE html>
<html>
  <head>
    <title>Admin Panel</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="admin.php">Proje </a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <font color="green">. .</font>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">

	                          <li><a href="logout.php">Çıkış Yap</a></li>

	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<?php require_once("sayfa/solmenu.php") ?>
		  </div>
		  <div class="col-md-10">
		  	<div class="row">
		  	<div class="content-box-large">

	
			
			
		<?php

$adim = $_GET["adim"];
switch($adim){
case "": 
?>
<?php 
$sql = "SELECT * FROM ayarlar"; 
$result=mysqli_query($con,$sql);
$admin = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<script type="text/javascript">

function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
    }
    else document.getElementById('ifYes').style.display = 'none';

}

</script>

<form action="site-settings.php?adim=onay" method="post">
  <div class="form-group">
    <td width="115">Site Title: </td>
    <td width="269"><input class="form-control" name="txt_title" type="text" value="<?php echo $admin["title"]; ?>" /></td>
  </div>
  <div class="form-group">
    <td width="115">Site Description: </td>
    <td width="269"><input class="form-control" name="txt_desc" type="text" value="<?php echo $admin["descr"]; ?>" /></td>
  </div>
   <div class="form-group">
    <td width="115">Favicon: </td>
    <td width="269"></td>
  </div>
   <div class="form-group">
    <td width="115">Logo İmages: </td>
    <td width="269"></td>
  </div>
  
  <?php
if($admin["fbactive"]==0)
{
	$display="display:none";
	$displayc="checked";
	$displaycd="";
}
else{
	$displaycd="checked";
	$displayc="";
}
 ?>
   <div class="form-group">
  <p>Login with facebook activate ?</p>
Yes
<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck" value="1" <?php echo $displaycd; ?>> 
No 
<input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck" value="0" <?php echo $displayc; ?>>

</div>


<div id="ifYes" style="<?php echo $display;?>">

    <div class="form-group">
    <td width="115">Facebook App ID: </td>
    <td width="269"><input class="form-control" name="faceapp" type="text" value="<?php echo $admin["faceapp"]; ?>" /></td>
 </div>
    <div class="form-group">
    <td width="115">Facebook Secret Key: </td>
    <td width="269"><input class="form-control" name="facekey" type="text" value="<?php echo $admin["facekey"]; ?>"/></td>
  </div>
    <div class="form-group">
    <td width="115">Site Link Adress: </td>
    <td width="269"><input class="form-control" placeholder="https://www.example.com" name="linq" type="text" value="<?php echo $admin["linq"]; ?>"/></td>
  </div>

</div>
  
  
  
  
  

  
   <tr>
    <td><input type="submit" class="form-control" value="Değiştir" /></td>
  </tr>
</form>
		
		
		
<?php
break;
case "onay": 

$title = $_POST['txt_title'];
$desc = $_POST['txt_desc'];
$fbapp = $_POST['faceapp'];
$fbkey = $_POST['facekey'];
$link = $_POST['linq'];
$radio = $_POST['yesno'];

if (mysqli_query($con,"UPDATE ayarlar SET title='$title',descr='$desc',faceapp='$fbapp',facekey='$fbkey',linq='$link',fbactive='$radio' WHERE id=1"))
{
   echo '<script type="text/javascript">alert("İşleminiz başarıyla gerçekleşti!");</script>';
	echo '<meta http-equiv="refresh" content="0;URL=site-settings.php">';
} else {
    echo "Error updating record: " . mysqli_error($con);
}



break;
}
?>	
			
			
			
			
			
			
			
			
			
		  	</div>
		  </div>
		</div>
    </div>
    <footer>
         <div class="container">
            <div class="copy text-center">
            </div>
         </div>
      </footer>
	  

	  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>




 
<?php
}
?>