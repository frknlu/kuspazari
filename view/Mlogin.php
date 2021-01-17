 <div class="modal fade login-model" tabindex="-1" role="dialog">
         <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
               <div class="login-logo" style="height: 65px;">
                  <h2><div style="float:left">Giriş Yap</div></h2> <div style="float:right"><font color="white"<a href="" data-toggle="modal" data-target=".login-model"> <i class="fa fa-window-close"></i> X </a></font></div>
               </div>
               <div class="login-box-inner">
 <?php //active
if($adminfb["fbactive"]==1){
 ?>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12">
						<a href="fbconfig.php">
                           <button type="" class="btn btn-primary col-xs-12 btn-facebook">
                           <i class="fa fa-facebook"></i> Facebook ile devam et
                           </button>
						   </a>
                        </div>
                     </div>
					 <form method="post" action="uyekontrol.php">
					   <div class="row">
                        <div class="col-xs-12">
                           <p class="social-text">VEYA E-POSTANI KULLAN</p>
                        </div>
                     </div>
					 
<?php }
else{
	echo '<form method="post" action="uyekontrol.php">';
}
 ?>					 
					 <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input class="form-control" name="kullanicigiris" type="text" placeholder="Email or Telephone" required>
                     </div>
                     <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                        <input type="password" name="kullanicisifre"  class="form-control" placeholder="Şifre" required>
                     </div>
                     <div class="remember-me-wrapper">
                        <div class="row">
                           <div class="col-xs-6">
                              <div class="checkbox-nice">
                                 <input type="checkbox" name="benihatirla" class="remember-me" checked="checked" />
                                 <label>
                                 Beni Hatırla
                                 </label>
                              </div>
                           </div>
                           <a href="" class="login-forget-link col-xs-6">
                           Şifremi Unutttum ?
                           </a>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12">
                           <button type="submit" class="btn btn-default col-xs-12">Giriş </button>
                        </div>
                     </div>
					 
					 
					 
                  </form>
               </div>
            </div>
         </div>
      </div>