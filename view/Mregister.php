<div class="modal fade register-model" tabindex="-1" role="dialog" >
         <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
               <div class="login-logo" style="height: 65px;">
                  <h2><div style="float:left">Kayıt Ol</div></h2> <div style="float:right"><font color="white"<a href="" data-toggle="modal" data-target=".register-model"> <i class="fa fa-window-close"></i> X </a></font></div>
               </div>
               <div class="login-box-inner">
                 
   <?php //active
if($adminfb["fbactive"]==1){
 ?>                   
                    
                     <div class="row">
                        <div class="col-xs-12 col-sm-12">
						<a href="fbconfig.php">
                           <button type="" class="btn btn-primary col-xs-12 btn-facebook">
                           <i class="fa fa-facebook"></i> Facebook ile kayıt ol
                           </button>
						   </a>
                        </div>
                     </div>
					  <form action="uyekaydet.php" method="post">
					  <div class="row">
                        <div class="col-xs-12">
                           <p class="social-text">VEYA E-POSTA İLE KAYIT OL</p>
                        </div>
                     </div>
	<?php } 
	else{
		echo '<form action="uyekaydet.php" method="post">';
	}
	?>					 
					 <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input class="form-control" name="kullaniciemail" type="email" placeholder="Email adresi" required>
                     </div>
                     <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password"  name="kullanicisifre" class="form-control" placeholder="Parola" required>
                     </div>
                     <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input type="text" name="kullanicitel" class="form-control" placeholder=" Telefon Numarası" required>
                     </div>
                     <div class="remember-me-wrapper">
                        <div class="row">
                           <div class="col-xs-6">
                              <div class="checkbox-nice">
                                 <input type="checkbox" class="remember-me" checked="checked" />
                                 <label>
                                 Koşulları Kabul Ediyorum.
                                 </label>
                              </div>
                           </div>
                           <a href="" class="login-forget-link col-xs-6">
                          
                           </a>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12">
                           <button type="submit" class="btn btn-default col-xs-12">Kayıt Ol</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>