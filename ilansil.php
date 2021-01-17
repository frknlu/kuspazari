<?php include("baglanti.php");
 $bilgiler=$_COOKIE["kullanici"]; 
 
 header('X-XSS-Protection: 0');
 
 if($bilgiler==""){
	 header("Refresh:0; url=index.php");
 }
 else{
	  
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


$ilanid = $_GET["ilan"];

mysqli_query($con,"DELETE FROM ilan WHERE ilanid='$ilanid' and uyeid='$uyeid'");

$ilanresim=mysqli_query($con,"select * FROM imgilan WHERE ilanid='$ilanid'");

while($ilanbilgi=mysqli_fetch_array($ilanresim))
{
	$dosyayolu=$ilanbilgi["url"];
	$dosya="uploads/".$dosyayolu;
	unlink($dosya);
}

mysqli_query($con,"DELETE FROM imgilan WHERE ilanid='$ilanid'");

header("Refresh:0; url=ilanlar%C4%B1m.php");

 }

?>