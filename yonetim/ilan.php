<?php
//Veritabanı bağlantı dosyamızı çekiyoruz
include("../baglanti.php");

ob_start();
session_start();

if(!isset($_SESSION["login"])){
    header("Location:index.php");
}
else
{
	
	header('X-XSS-Protection: 0');
?>



<!DOCTYPE html>
<html>
  <head>
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
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
//Bir string değişken oluşturduk
$adim = $_GET['adim'];
switch($adim){
case "": //Atadığımız string değişkenimize hiçbir değer atanmamış ise aşağıdaki kodlamalar devreye giriyor
?>
<table class="table" width="800" border="1" bordercolor="#CCCCCC" style="border-collapse:collapse; color:#333; font-size:12px; font-family:Arial; margin-bottom:25px;">
  <tr>
<td width="18" bgcolor="#F2F2F2"><b>#</b></td>
<td width="18" bgcolor="#F2F2F2"><b>ilanid</b></td>
<td width="100" bgcolor="#F2F2F2"><b>kusturu</b></td>
<td width="100" bgcolor="#F2F2F2"><b>baslik</b></td>
<td width="70" bgcolor="#F2F2F2"><b>aciklama</b></td>
<td width="60" bgcolor="#F2F2F2"><b>fiyat</b></td>
<td width="10" bgcolor="#F2F2F2"><b>cinsiyet</b></td>
<td width="30" bgcolor="#F2F2F2"><b>tarih</b></td>
<td style="text-align:center;" width="80" bgcolor="#F2F2F2"><b>İlan Durumu</b></td>
<td style="text-align:center;" width="150" bgcolor="#F2F2F2"><b>İşlemler</b></td>
  </tr>

<?php
$sql="SELECT * FROM ilan";
$result = mysqli_query($con,$sql);
while($kategori_cek_yeni = mysqli_fetch_array($result)){
$id = $kategori_cek_yeni["ilanid"];
$sira++;

$bandurum=$kategori_cek_yeni["onay"];

$bir=1;
$sifir=0;

if($bandurum==1)
{
	$bandurum2="<font color='green'>İlan Yayında</font>";
	$banduruml='<a style="color:red;" href="ilan.php?adim=banla&id='.$id.'&ban='.$sifir.'">Kaldır</a>';
}
else {
	$bandurum2="<font color='red'>Beklemede</font>";
	$banduruml='<a style="color:green;" href="ilan.php?adim=banla&id='.$id.'&ban='.$bir.'">Yayınla</a>';
}

echo '
  <tr>
    <td style="text-align:center;">'.$sira.'</td>
    <td>'.$kategori_cek_yeni['ilanid'].'</td>
	<td>'.$kategori_cek_yeni['kusturu'].'</td>
	<td>'.$kategori_cek_yeni['baslik'].'</td>
	<td>'.$kategori_cek_yeni['aciklama'].'</td>
	<td>'.$kategori_cek_yeni['fiyat'].'</td>
	<td>'.$kategori_cek_yeni['cinsiyet'].'</td>
	<td>'.$kategori_cek_yeni['tarih'].'</td>	
	
	<td>'.$bandurum2.'</td>	
	
    <td style="text-align:center;">'.$banduruml.'</td>
   </tr>';
}
?>
</table>


<?php
break;

case "banla": 
$id = $_GET["id"];
$yasak = $_GET["ban"];

$uyeban = mysqli_query($con,"UPDATE ilan SET onay='$yasak' WHERE ilanid='$id'");

if($uyeban)
{
	echo '<script type="text/javascript">alert("İlan işleminiz başarıyla gerçekleşti!");</script>';
	echo '<meta http-equiv="refresh" content="0;URL=ilan.php">';
}
else {
    echo '<script type="text/javascript">alert("İlan düzenlenirken bir hata oluştu!");</script>';
	echo '<meta http-equiv="refresh" content="0;URL=ilan.php">';
}
break;




}
?>

				
				
		  	</div>
		  </div>
		</div>
    </div>
    <footer>
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