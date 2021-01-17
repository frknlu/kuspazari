<?php 
include("baglanti.php");
$bilgiler=$_COOKIE["kullanici"]; 
$resut=mysqli_query($con,"select * from Users where Femail='$bilgiler' or Fuid='$bilgiler'");
$uye=mysqli_fetch_assoc($resut);	

if($_POST['a'] == "yeni"){ 

$Kime = @$_POST['kime']; $Kimden = @$_POST['kimden']; $Mesaj = @$_POST['mesaj']; $İlanId = @$_POST['ilanid']; 

    if($Kime != '' && $Kimden != '' && $Mesaj != '' && $İlanId != ''){ 
        $Eski = strip_tags($Mesaj); 
        $Kime = mysqli_real_escape_string($con, $Kime); 
        $Kimden = mysqli_real_escape_string($con, $Kimden); 
        $Mesaj = mysqli_real_escape_string($con, $Mesaj);
        $İlanId = mysqli_real_escape_string($con, $İlanId); 		
        $Kime =  strip_tags($Kime); 
        $Kimden = strip_tags($Kimden); 
        $Mesaj = strip_tags($Mesaj);
        $İlanId = strip_tags($İlanId); 		
        $Tarih = date("Y/m/d H:i:s");
        $Sorgu = "INSERT INTO message (ilanid,alan_UID,gonderen_UID,ms,tarih) VALUES ('$İlanId','$Kime','$Kimden','$Mesaj','$Tarih')"; 
        $Kaydet = mysqli_query($con,$Sorgu);         
        if($Kaydet){ 
            $Tarih = explode(' ', $Tarih)[1]; 
            echo '
			<div class="outgoing_msg">
		  <div class="sent_msg">
			<p>'.$Eski.'</p>
			<span class="time_date"> '.$Tarih.' </span> </div>
		</div>
			'; 
            echo '<p id="LastID_Message" style="display:none;">LastID:'.mysqli_insert_id($con).'</p>'; 
        }else{ 
            echo '<br>[System] : Mesajınız İletilemedi ! '.mysqli_error($con); 
        } 
    } 
} 
elseif ($_POST['a'] == "eski"){ 
    $Kime = @$_POST['kime']; $Kimden = @$_POST['kimden']; $İlanId = @$_POST['ilanid'];
	
    if($Kime != '' && $Kimden != '' ){ 
        $Sorgu = "SELECT * FROM message WHERE ilanid='$İlanId' AND (alan_UID = '$Kime' and gonderen_UID = '$Kimden') or (alan_UID = '$Kimden' and gonderen_UID = '$Kime') ORDER BY id"; 
        $Yükle = mysqli_query($con,$Sorgu); 
		
		$resut1=mysqli_query($con,"select * from Users where UID='$Kime'");
        $row1=mysqli_fetch_assoc($resut1);	
		
        if(mysqli_affected_rows($con)){ 
            $i = 1; 
            $Sayı = mysqli_num_rows($Yükle); 
            while($X = mysqli_fetch_array($Yükle)){ 
                $X['tarih'] = explode(' ', $X['tarih'])[1]; 
				
                if($X['gonderen_UID'] == $Kimden){ 
                    echo '
					<div class="outgoing_msg">
		  <div class="sent_msg">
			<p>'.$X['ms'].'</p>
			<span class="time_date"> '.$X['tarih'].' </span> </div>
		</div>
					'; 
                }else{ 
                    echo '
		<div class="incoming_msg">
		  <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
		  <div class="received_msg">
			<div class="received_withd_msg">
			  <p>'.$X['ms'].'</p>
			  <span class="time_date">'.$row1["Ffname"].' | '.$X['tarih'].'</span></div>
		  </div>
		</div>	
					'; 
                } 
                if ($i == $Sayı){ 
                    echo '<p id="LastID_Message" style="display:none;">LastID:'.$X['id'].'</p>';                     
                } 
                $i++; 
            } 
        } 
    } 
} 

// not work

elseif ($_POST['a'] == "guncelle"){  
    $Kime = @$_POST['kime']; $Kimden = @$_POST['kimden']; $SonMesaj = @$_POST['sonmesaj']; $İlanId = @$_POST['ilanid'];
	
    if($Kime != '' && $Kimden != ''){ 
        $Sorgu = "SELECT * FROM message WHERE ilanid='$İlanId' AND (alan_UID = '$Kime' and gonderen_UID = '$Kimden') or (alan_UID = '$Kimden' and gonderen_UID = '$Kime') ORDER BY id DESC"; 
        $Yükle = mysqli_query($con,$Sorgu); 
		
		$resut1=mysqli_query($con,"select * from Users where UID='$Kime'");
        $row1=mysqli_fetch_assoc($resut1);
		
        if(mysqli_affected_rows($con)){ 
            $SonPST = explode(':', $SonMesaj)[1]; 
            $SQLSon = mysqli_fetch_array($Yükle)['id']; 
            if($SonPST != $SQLSon){ 
                $Sorgu = "SELECT * FROM message WHERE ilanid='$İlanId' AND id > '$SonPST' AND id <='$SQLSon' AND (alan_UID = '$Kime' or alan_UID = '$Kimden') AND (gonderen_UID = '$Kime' or gonderen_UID = '$Kimden') ORDER BY id"; 
                $Yükle = mysqli_query($con,$Sorgu); 
                if(mysqli_affected_rows($con)){ 
                    $i = 1; 
                    $Sayı = mysqli_num_rows($Yükle); 
                    while($X = mysqli_fetch_array($Yükle)){ 
                        $X['tarih'] = explode(' ', $X['tarih'])[1]; 
                        
					  if($X['gonderen_UID'] == $Kimden){ 
                    echo '
					<div class="outgoing_msg">
		  <div class="sent_msg">
			<p>'.$X['ms'].'</p>
			<span class="time_date"> '.$X['tarih'].' </span> </div>
		</div>
					'; 
                }else{ 
                    echo '
		<div class="incoming_msg">
		  <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
		  <div class="received_msg">
			<div class="received_withd_msg">
			  <p>'.$X['ms'].'</p>
			  <span class="time_date">'.$row1["Ffname"].' | '.$X['tarih'].'</span></div>
		  </div>
		</div>	
					'; 
                }
						
						
                        if ($i == $Sayı){ 
                            echo '<p id="LastID_Message" style="display:none;">LastID:'.$X['id'].'</p>';                     
                        } 
                        $i++; 
                    } 
                } 
            } 
        } 
    } 
} 
?>