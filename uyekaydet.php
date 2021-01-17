<?php 
include ("baglanti.php"); 

header('Content-Type: text/html; charset=utf-8');

$email= $con->real_escape_string($_POST['kullaniciemail']);
$sifre = $con->real_escape_string($_POST['kullanicisifre']);
$tel=$con->real_escape_string($_POST['kullanicitel']);

$tarih=date("d/m/y");
$msifre=md5($sifre);


if(empty($email))
{
    echo "<script language='javascript'>
alert('Hata! Email Girmediniz Kayıt Olamadınız Tekrar Deneyin'+ window.location.assign('index.php'))
</script> ";
}
else if(empty($sifre))
{
    echo "<script language='javascript'>
alert('Hata!Parola Girmediniz Kayıt Olamadınız Tekrar Deneyin'+ window.location.assign('index.php'))
</script> ";
}
else if(empty($tel))
{
    echo "<script language='javascript'>
alert('Hata!Telefon Girmediniz Kayıt Olamadınız Tekrar Deneyin'+ window.location.assign('index.php'))
</script> ";
}

$sorgu=mysqli_query($con,"SELECT * from Users where Femail='$email' or tel='$tel'");

if (mysqli_num_rows($sorgu)>0) {
echo "<script language='javascript'>
alert('! Email veya Telefon kayıtlı.'+ window.location.assign('index.php'))
</script> ";
} 
else {
	
$sql = "insert into Users(Femail,sifre,tel)value('$email','$msifre','$tel')"; 
$ekle=mysqli_query($con,$sql);

if($ekle){ 
echo "<script language='javascript'>alert('Başarıyla Kayıt Oldunuz! Giriş Yaparak Devam Edin ' + window.location.assign('/index.php'))</script> "
;
}
else{ 
echo "<script language='javascript'>
alert('Hata! Kayıt Olamadınız Tekrar Deneyin'+ window.location.assign('index.php'))
</script> 
";
exit(); 
} 

}
?>