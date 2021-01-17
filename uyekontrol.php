<?php
include ("baglanti.php");
header('Content-type: text/html; charset=utf-8');

$kullanici = $con->real_escape_string($_POST['kullanicigiris']);
$sifre = $con->real_escape_string($_POST['kullanicisifre']);
$benihatirla=$_POST["benihatirla"]; 

/*
if (preg_match("/[\-]{2,}|[;]|[']|[\\\*]/", $kullanici))
else if (preg_match("/[\-]{2,}|[;]|[']|[\\\*]/", $sifre))
else
*/
$msifre=md5($sifre); 

if(($kullanici=="")or($sifre=="")){ 
echo "Bos Alan Birakmayiniz"; 
exit(); 
}else{ 
$sql = "select * from Users where Femail='$kullanici' and sifre='$msifre' or tel='$kullanici' and sifre='$msifre'"; 
$sor=mysqli_query($con,$sql); 
if(@mysqli_num_rows($sor)>0){ 
$kullanicidurumucek=mysqli_fetch_array($sor,MYSQLI_ASSOC); 

$durum=$kullanicidurumucek['ban'];
$kullanici=$kullanicidurumucek['Femail'];
if($durum=="0"){ 

if($benihatirla == '1') { 
setcookie("kullanici","$kullanici",time()+7200); 
header( "refresh:0;url=index.php" );
}
else{
setcookie("kullanici","$kullanici",time()+60*60); 
header( "refresh:0;url=index.php" );
}

}else{ 
echo "
<html><head>

<script language='JavaScript'>
<!--
var left='[';
var right=']';
var msg=' BANNED - www.kuspazari.pet ';
var speed=200;
 
function scroll_title() {
        document.title=left+msg+right;
        msg=msg.substring(1,msg.length)+msg.charAt(0);
        setTimeout('scroll_title()',speed);
}
scroll_title();
 
// End -->
</script>

</head>
<body bgcolor='#464646'>
<center style='margin-top:100px'>
<img src='img/banned.png' height='120px'>
    <br>
    <font color='white' size='21'>Siteye Girişiniz Yasaklanmıştır </font><font color='red' size='30'><b>!</b></font>
<center>
</center></center></body></html>
"; 

exit(); 
} 

}else{ 

echo "<script type='text/javascript'>  
alert('Kullanici Bilginizi Yada Sifre Hatali Girdiginiz Sifre : $sifre'); 
</script>"
        . header("refresh:0;url=index.php");
    
exit(); 
} 

} 

?>