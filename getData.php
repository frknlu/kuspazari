<?php
// configuration
include 'baglanti.php';

$row = $_POST["row"];
$rowperpage = 4;

// selecting posts
$query = 'SELECT * FROM ilan where onay=1 order by tarih desc limit '.$row.','.$rowperpage;
$result = mysqli_query($con,$query);

$html='';

				$aylar = array(
    'Ocak',
    'Şubat',
    'Mart',
    'Nisan',
    'Mayıs',
    'Haziran',
    'Temmuz',
    'Ağustos',
    'Eylül',
    'Ekim',
    'Kasım',
    'Aralık'
);

	 while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
   {
$ay = $aylar[date('m', strtotime($row["tarih"])) - 1];

	 $ilanid=$row["ilanid"];
	 $ilanresim=mysqli_query($con,"SELECT * FROM imgilan where ilanid='$ilanid' limit 1");
	 $ilanresimsnc=mysqli_fetch_array($ilanresim,MYSQLI_ASSOC);
	 
	 if($ilanresimsnc=="")
	 {
		$resim="err/resim_yok.jpg";
	 }
	 else{
		 $resim=$ilanresimsnc["url"];
	 }
	   echo'
	      <a href="ilandetay.php?ilan='.$row["id"].'">
	   
	<div class="col-md-6 col-sm-6 col-xs-12">
   <div class="listing-post">   
   <div class="col-md-4 col-sm-12 col-xs-12 nopadding">   
   <div class="listing-image">                                                  
   <img src="uploads/'.$resim.'" class="img-responsive" alt="'.$row["baslik"].'" style="max-height:141px;">                                                
   </div>                                            
   </div>  

   <div class="col-md-8 col-sm-12 col-xs-12">                                                
   <div class="listing-desc">
   <h3 class="listing-desc-title">                                                      
   <a href="ilandetay.php?ilan='.$row["id"].'">'.$row["baslik"].'</a>                                                  
   </h3>                                                   
   <div class="listing-desc-category">                      
   <ul>                                                         
   <li>Tür</li>
   <li>'.$row["kusturu"].'</li>                                          
   </ul>
   </div>                                                 
   <span class="listing-price">Fiyat: <span>'.$row["fiyat"].' TL
   </span></span>                                                 
   <span class="listing-desc-date">
   <i class="fa fa-calendar"></i>  ';
 
echo date('d ', strtotime($row["tarih"])). $ay .date(' Y', strtotime($row["tarih"]));

   echo 
   '                                                
   </span>
  
   </div>                                            
   </div>    
   </div>
   </div>
   </a>   
   ';
   
    echo '<div class="post" id="post_'.$id.'"></div>';
   }

echo $html;