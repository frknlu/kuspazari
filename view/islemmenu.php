<div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="dashboard-menu-container">
                        <ul>
						<li>
                              <a href="hesabım.php">
                                 <div class="icon"><i class="fa fa-user"></i></div>
                                 <div class="menue-name">Profil </div>
                              </a>
                           </li>
                           <li>
                              <a href="hesabım.php?islem=duzenle">
                                 <div class="icon"><i class="fa fa-edit"></i></div>
                                 <div class="menue-name">Bilgilerimi Düzenle</div>
                              </a>
                           </li>
<?php 
$adim = $_GET["durum"];
switch($adim){
case "": 
echo '
          <li>
                              <a href="ilanlarım.php?durum=aktif">
							  <div class="icon"><i class="fa fa-heart-o"></i></div>
                                 <div class="menue-name">Aktif İlanlar</div>
                              </a>
                           </li>
                           <li>
                              <a href="ilanlarım.php?durum=pasif">
							    <div class="icon"><i class="fa fa-history"></i></div>
                                 <div class="menue-name">Onay Bekliyen İlanlar</div>
                              </a>
                           </li>
';
break;
case "aktif": 

echo '<li class="active">
                              <a href="ilanlarım.php?durum=aktif">
							  <div class="icon"><i class="fa fa-heart-o"></i></div>
                                 <div class="menue-name">Aktif İlanlar</div>
                              </a>
                           </li>
                           <li>
                              <a href="ilanlarım.php?durum=pasif">
							    <div class="icon"><i class="fa fa-history"></i></div>
                                 <div class="menue-name">Onay Bekliyen İlanlar</div>
                              </a>
                           </li>';

break;
case "pasif": 

echo '<li>
                              <a href="ilanlarım.php?durum=aktif">
							  <div class="icon"><i class="fa fa-heart-o"></i></div>
                                 <div class="menue-name">Aktif İlanlar</div>
                              </a>
                           </li>
                           <li class="active">
                              <a href="ilanlarım.php?durum=pasif">
							    <div class="icon"><i class="fa fa-history"></i></div>
                                 <div class="menue-name">Onay Bekliyen İlanlar</div>
                              </a>
                           </li>';

break;
}
?>
                           <li>
                              <a href="mesaj.php">
                                 <div class="icon"><i class="fa fa-envelope"></i></div>
                                 <div class="menue-name">Mesajlar</div>
                              </a>
                           </li>                        
						   
                        </ul>
                     </div>
                  </div>