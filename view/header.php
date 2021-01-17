 <div class="container">            
 <div class="row">               
 <div class="col-md-7 col-sm-6 hidden-xs">                  
 <div class="header-top-left header-top-info">                     
 <div class="social-bar">                        
 <ul><li><a href="/"><img src="images/logo.png" alt="" style="width:100px;" ></a></li></ul>
 </div>
 </div>
 </div>               
 <div class="col-md-5 col-sm-6 col-xs-12">                  
 <div class="header-top-right pull-right header-top-info">
 <ul>
 <?php	
 $bilgiler=$_COOKIE["kullanici"]; if($bilgiler==""){ ?>
 <?php //active
$resultfb=mysqli_query($con,"SELECT * FROM ayarlar");
$adminfb = mysqli_fetch_array($resultfb,MYSQLI_ASSOC);
if($adminfb["fbactive"]==1){
	echo '<li><a href="" data-toggle="modal" data-target=".login-model"><img style="height:15px" src="img/facebook.gif"></a></li>';
}
 ?>
 <li><a href="" data-toggle="modal" data-target=".register-model"><i class="fa fa-user"></i> Kayıt Ol</a></li>
 <li><a href="" data-toggle="modal" data-target=".login-model"><i class="fa fa-sign-in"></i> Giriş Yap</a></li>
 
<li><a href="" data-toggle="modal" data-target=".login-model" class=""><i class="fa fa-plus-square"></i> 
<script>
var text="<b>Ücretsiz İlan Ver </b>" // Yazı // WebKodu.com
var speed=80 // Hız // WebKodu.com




if (document.all||document.getElementById){
document.write('<span id="highlight">' + text + '</span>')
var storetext=document.getElementById? document.getElementById("highlight") : document.all.highlight
}
else
document.write(text)
var hex=new Array("00","14","28","3C","50","64","78","8C","A0","B4","C8","DC","F0")
var r=1
var g=1
var b=1
var seq=1
function changetext(){
rainbow="#"+hex[r]+hex[g]+hex[b]
storetext.style.color=rainbow
}
function change(){
if (seq==6){
b--
if (b==0)
seq=1
}
if (seq==5){
r++
if (r==12)
seq=6
}
if (seq==4){
g--
if (g==0)
seq=5
}
if (seq==3){
b++
if (b==12)
seq=4
}
if (seq==2){
r--
if (r==0)
seq=3
}
if (seq==1){
g++
if (g==12)
seq=2
}
changetext()
}
function starteffect(){
if (document.all||document.getElementById)
flash=setInterval("change()",speed)
}
starteffect()
</script>
<!-- Kaliteli Kod Yayıncısı & Kaynak : http://www.webkodu.com -->
<!-- WebKodu.com / Artık Herşey Tek Çatı Altında : http://www.webkodu.com  Teşekkürler-->
</a></li>
 <?php }else{ ?> 
 
                            <li class="country top-profile">
                              <div class="btn-group" role="group">
                                 <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <?php 
 $sql = "SELECT * FROM Users where Fuid='$bilgiler' or Femail='$bilgiler'";
 $result=mysqli_query($con,$sql);
 $row0=mysqli_fetch_array($result,MYSQLI_ASSOC);if($row0["Fuid"]=="") /*facebook ile giriş yapmadıysa*/	
 {	
 if($row0['Ffname']==""){
	echo "Hesabım";
 }
 else{
 echo $row0['Ffname'];	
 }
 
 }	else	
 {	echo $row0['Ffname'];	
}?>
                                 <span class="caret"></span>
                                 </button>
                                 <ul class="dropdown-menu">
                                    <li> <a href="hesabım.php"><i class="fa fa-user"></i>Profil</a></li>
                                    <li><a href="ilanlarım.php"><i class="fa fa-edit"></i>İlanlarım</a></li>
									  <li><a href="mesaj.php"><i class="fa fa-envelope"></i>Mesajlarım</a></li>
                                 </ul>
                              </div>
                           </li>
 
 
<li><a href="logout.php"> <i class="fa fa-power-off"></i> Çıkış Yap</a></li>
<li><a href="ilanvercode.php" class=""><i class="fa fa-plus-square"></i> 
<script>
var text="<b>Ücretsiz İlan Ver </b>" // Yazı // WebKodu.com
var speed=80 // Hız // WebKodu.com




if (document.all||document.getElementById){
document.write('<span id="highlight">' + text + '</span>')
var storetext=document.getElementById? document.getElementById("highlight") : document.all.highlight
}
else
document.write(text)
var hex=new Array("00","14","28","3C","50","64","78","8C","A0","B4","C8","DC","F0")
var r=1
var g=1
var b=1
var seq=1
function changetext(){
rainbow="#"+hex[r]+hex[g]+hex[b]
storetext.style.color=rainbow
}
function change(){
if (seq==6){
b--
if (b==0)
seq=1
}
if (seq==5){
r++
if (r==12)
seq=6
}
if (seq==4){
g--
if (g==0)
seq=5
}
if (seq==3){
b++
if (b==12)
seq=4
}
if (seq==2){
r--
if (r==0)
seq=3
}
if (seq==1){
g++
if (g==12)
seq=2
}
changetext()
}
function starteffect(){
if (document.all||document.getElementById)
flash=setInterval("change()",speed)
}
starteffect()
</script>
<!-- Kaliteli Kod Yayıncısı & Kaynak : http://www.webkodu.com -->
<!-- WebKodu.com / Artık Herşey Tek Çatı Altında : http://www.webkodu.com  Teşekkürler-->
</a></li>
<?php } ?>						

</ul>
</div>
</div>
</div>
</div>