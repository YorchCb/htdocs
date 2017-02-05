<?php
/*
include 'plantillas/checkAdmin.php';
*/

$hostname='localhost';
$username='root';
$password='';
$batabase='eventos_coordinados';

$conexion= new mysqli($hostname, $username, $password, $batabase);

$usuarios="SELECT * FROM users";
$resUsers=$conexion->query($usuarios);
?>
<!--
<script type="text/javascript">
  setTimeout("location.reload()", 1);
</script>
//-->
<table id="usuarios" class="table">
	<tr>
		<th>ID</th>
		<th>Foto</th>
		<th>Nombre</th>
		<th>Rango</th>
		<th>Ban</th>
	</tr>

	<?php 
		while($registro = $resUsers ->fetch_array(MYSQLI_BOTH)) {
			echo'
				<tr>
					<td>
						'.$registro['id'].'
						'.$registro['picture'].'
						'.$registro['first_name'].'
						'.$registro['rango'].'
						'.$registro['ban'].'
					</td>
				</tr>';
		}

	?>

</table>