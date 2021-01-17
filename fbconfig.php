<?php
session_start();
include("baglanti.php");
$sql = "SELECT * FROM ayarlar"; 
$result=mysqli_query($con,$sql);
$admin = mysqli_fetch_array($result,MYSQLI_ASSOC);

// added in v4.0.0
require_once 'autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication($admin["faceapp"],$admin["facekey"]);
// login helper with redirect_uri
    $helper = new FacebookRedirectLoginHelper($admin["linq"]);
try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/me' );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();
     	$fbid = $graphObject->getProperty('id');              // To Get Facebook ID
 	    $fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
	    $femail = $graphObject->getProperty('email');    // To Get Facebook email ID
	/* ---- Session Variables -----*/
	    $_SESSION['FBID'] = $fbid;           
        $_SESSION['FULLNAME'] = $fbfullname;
	    $_SESSION['EMAIL'] =  $femail;
		setcookie("kullanici","$fbid",time()+7200); 
		
    /* ---- header location after session ----*/	
  
   $check = mysqli_query($con,"select * from Users where Fuid=$fbid");
   $check = mysqli_num_rows($check);
   
	
	if (empty($check)) { 	
	$query = "INSERT INTO Users (Fuid,Ffname,Femail) VALUES ('$fbid','$fbfullname','$femail')";
	mysqli_query($con,$query);	
	 header("Location: index.php");
	} else 
	{ 	
	$query = "UPDATE Users SET Ffname=$fbfullname, Femail=$femail where Fuid=$fbid";
	mysqli_query($con,$query);
	 header("Location: index.php");
	}
 
} else {
  $loginUrl = $helper->getLoginUrl();
 header("Location: ".$loginUrl);
}
?>