<?php

$host="locahost";
$usuario="root";
$contraseña="";
$base="eventos_coordinados";

$coexion= new mysqli($host, $usuario, $contraseña, $base);

$usuarios="SELECT * FROM users";
$resUsers=$conexion->query($usuarios);