<?php
require_once './app/fbConfig.php';
require_once './app/User.php';

if (!empty ($userData) && $userData['rango'] == '0') {
	header('Location:');
}
