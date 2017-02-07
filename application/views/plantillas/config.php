<?php

$hostname='localhost';
$username='root';
$password='';
$batabase='eventos_coordinados';

$conexion= new mysqli($hostname, $username, $password, $batabase);

$usuarios="SELECT * FROM users";
$resUsers=$conexion->query($usuarios);

$eventosgtav="SELECT * FROM eventos_gtav";
$resEventosgtav=$conexion->query($eventosgtav);

$eventosbt1="SELECT * FROM eventos_bt1";
$resEventosbt1=$conexion->query($eventosbt1);

$eventosbt4="SELECT * FROM eventos_bt4";
$resEventosbt4=$conexion->query($eventosbt4);
?>