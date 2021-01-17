<?php
include("baglanti.php");
 $bilgiler=$_COOKIE["kullanici"]; 
 
 if($bilgiler=="" or $_POST["ilanid"]==""){
	 header("Refresh:0; url=index.php");
 }
 else{

$uyebilg = mysqli_query($con,"SELECT * FROM Users where Fuid='$bilgiler' or Femail='$bilgiler'");
$uyesonuc = mysqli_fetch_array($uyebilg,MYSQLI_ASSOC);

if(isset($_POST['gnumaraonay'])) { // checkbox seçilmişse "on" değeri gönderiliyor
    $gnumaraal=1;
} else { // seçilmemişse bu değer sayfaya hiç gönderilmiyor
     $gnumaraal=0;
}

$uyeid = $uyesonuc["UID"]; /*İlanı yayınlayan*/
$kusturu = $_POST["kusturu"];
$baslik = $_POST["baslik"];
$fiyat = $_POST["fiyat"];
$cinsiyet = $_POST["cinsiyet"];
$yas = $_POST["yas"];
$il = $_POST["il"];
$ilce = $_POST["ilce"];
$gnumara = $gnumaraal;
$url = $_POST["url"];
$ilanid = $_POST["ilanid"];
$ilanaciklama = $_POST["aciklama"];
$tarih = date("Y-m-d");

$ilan = "INSERT INTO ilan (uyeid,ilanid,kusturu,baslik,fiyat,cinsiyet,yas,il,ilce,gnumara,url,tarih,aciklama) value ('$uyeid','$ilanid','$kusturu','$baslik','$fiyat','$cinsiyet','$yas','$il','$ilce','$gnumara','$url','$tarih','$ilanaciklama')";

$islem=mysqli_query($con,$ilan);

unset($_COOKIE['random']);
setcookie('random', null, -1, '/');

echo '<meta http-equiv="refresh" content="0;URL=ilanlar%C4%B1m.php?durum=pasif">';
 }
?>