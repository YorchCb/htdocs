<?php
//Include FB config file && User class
require_once 'fbConfig.php';
require_once 'User.php';


if(!$fbUser){
	$fbUser = NULL;
	$loginURL = $facebook->getLoginUrl(array('redirect_uri'=>$redirectURL,'scope'=>$fbPermissions));
	echo '  / <a href="'.$loginURL.'">Logearse</a>'; 	
}else{
	//Get user profile data from facebook
	$fbUserProfile = $facebook->api('/me?fields=id,first_name,last_name,email,link,gender,locale,picture');
	
	//Initialize User class
	$user = new User();
	
	//Insert or update user data to the database
	$fbUserData = array(
		'oauth_provider'=> 'facebook',
		'oauth_uid' 	=> $fbUserProfile['id'],
		'first_name' 	=> $fbUserProfile['first_name'],
		'last_name' 	=> $fbUserProfile['last_name'],
		'email' 		=> $fbUserProfile['email'],
		'gender' 		=> $fbUserProfile['gender'],
		'locale' 		=> $fbUserProfile['locale'],
		'picture' 		=> $fbUserProfile['picture']['data']['url'],
		'link' 			=> $fbUserProfile['link'],
	);
	$userData = $user->checkUser($fbUserData);
	
	//Put user data into session
	$_SESSION['userData'] = $userData;

	//Pregunta si esta baneado
	if (!empty ($userData) && $userData['ban'] == '1') {
		echo '<script language="javascript">alert("Fuiste baneado");</script>';
		unset($_SESSION['userData']);
		$facebook->destroySession();
	}else{
		//Pregunta si se inicio sesion
		if(!empty($userData)){ 
			//Pregunta si es admin
			if (!empty ($userData) && $userData['rango'] == '1') {

				echo '<a href="./app/logout.php">Desloguear</a> / <a href=" <a href="/panel/admin">Panel de admistrador</a>'; 
			}else{
        	echo '<a href="./app/logout.php">Desloguear</a> / <a href="panel/panel_control">Panel de usuario</a>'; 
		}}else{
			echo '<h3 style="color:red">Un problema ocurrio, por favor intente de nuevo.</h3>';
				}
							}
														}

/*

if (!empty ($userData) && $userData['ban'] == '1') {
		echo '<script language="javascript">alert("Fuiste baneado");</script>';
		unset($_SESSION['userData']);
		$facebook->destroySession();
	}else{
	if(!empty($userData)){
        echo '<a href="./app/logout.php">Desloguear</a> / <a href="./?action=">Panel de usuario</a>'; 
	}else{
		echo '<h3 style="color:red">Un problema ocurrio, por favor intente de nuevo.</h3>';
	}
		}
}

*/
?>


