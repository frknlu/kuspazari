<?php
require_once("baglanti.php");

if(isset($_GET['il'])){
	
	$il=(int)$_GET['il'];
	
	if($il>0){
        $db=mysqli_query($con,"SELECT `id`,`ilce_adi` FROM `ilce` WHERE `il_id`='$il' ORDER BY `id` ASC");
		$list='{"0":"İlçe Seçiniz",';
		while($ilr=mysqli_fetch_array($db,MYSQLI_ASSOC)){
			$list.='"'.$ilr['id'].'":"'.$ilr['ilce_adi'].'",';
		}
		$list=substr($list,0,-1);
		$list.="}";
		
		echo $list;
	}
}

?>