<?php
	require_once 'config.php';
?>
<a href="/main">Volver a home</a>
<h4 style="text-align: center;">Creador de eventos</h4>
<div class="col-xs-12" style="text-align: center;">
	<form method="POST">
		Nombre del evento:<input type="text" name="txtNombre"> 
		Fecha y hora:<input type="datetime-local" name="fecha" min="2017-02-07"> 
		Descripción:<input type="text" name="info">
		Juego:
			<select name="juego">
				<option value="bt1">Battlefield 1</option>
				<option value="bt4">Battlefield 4</option>
				<option value="gtav">Gta V</option>
			</select>
		<br>
		<input type="submit" value="Crear evento" name="btnCrearEvento">
		<br>
	</form>
</div>
<!--
Foto
Creador
Nombre del evento
Fecha
Hora
Descripcion
ID
-->
<?
$foto = $userData['picture'];
$creador = $userData['first_name'], $userData['last_name'];
$nombre = $_POST['txtNombre'];
$fecha = $_POST['fecha'];
$descripcion = $_POST['info'];
$id = $userData['oauth_uid'];
$juego = $_POST['juego'];


$insertar = "INSERT into eventos_".$juego." values ('$nombre', '$creador', '$id', '$foto', '$fecha', $descripcion)";

$resultado = mysqli_query($conexion, $insertar)
or die ("error");