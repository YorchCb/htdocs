<?php

$hostname='localhost';
$username='root';
$password='';
$batabase='eventos_coordinados';

$conexion= new mysqli($hostname, $username, $password, $batabase);

$usuarios="SELECT * FROM users";
$resUsers=$conexion->query($usuarios);


?>