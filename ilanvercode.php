<?php
include("baglanti.php");
 $bilgiler=$_COOKIE["kullanici"]; 
 
  header('X-XSS-Protection: 0');
 if($bilgiler==""){
	 header("Refresh:0; url=index.php");
 }
 else{

function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$randomck=generateRandomString();

$varmi = mysqli_query($con,"SELECT * FROM ilan where ilanid='$randomck'");
if(!$varmi){	
header("Refresh:0; url=ilanvercode.php");
}
else{
$random = "random";
$cookie_value = $randomck;
setcookie($random, $cookie_value, time() + 1800, '/');
header("Refresh:0; url=ilanver.php");
}

}
?>