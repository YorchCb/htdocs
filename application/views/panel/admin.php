<!-- 
<?php
	include 'config.php';
?>
-->
<script type="text/javascript">
  setTimeout("location.reload()", 3600);
</script>
<a href="/main">Volver a home</a>
<h4 style="text-align: center;">Usuarios</h4>
	<form method="post">
		<table class="table">
			<tr>
				<th>ID</th>
				<th>Foto</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Rango</th>
				<th>Ban
				</th>
			</tr>

			<?php 
				while($registro = $resUsers ->fetch_array(MYSQLI_BOTH)) {
					echo'
						<tr>
							<td>'.$registro['id'].'</td>
							<td> <img src="'.$registro['picture'].'"></td>
							<td>'.$registro['first_name'].'</td>
							<td>'.$registro['last_name'].'</td>
							<td>'.$registro['rango'].'</td>
							<td>'.$registro['ban'].'</td>
						</tr>';
				}

			?>
		</table>
	</form>

