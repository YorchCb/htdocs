<?php
	include 'config.php';
?>
<div>
	<center>Eventos de Battlefield 1</center>	
	<form method="post">
		<table class="table">
			<tr>
				<th>Nombre del evento</th>
				<th>FotoCreador</th>
				<th>Creador</th>
				<th>Hora</th>
				<th>Fecha</th>
				<th>Descripción</th>
			</tr>


			<?php 
				while($registro = $resEventosbt1 ->fetch_array(MYSQLI_BOTH)) {
					echo'
						<tr>
							<td>'.$registro['Nombre del evento'].'</td>
							<td> <img src="'.$registro['FotoCreador'].'"></td>
							<td>'.$registro['Creador'].'</td>
							<td>'.$registro['Hora'].'</td>
							<td>'.$registro['Fecha'].'</td>
							<td>'.$registro['Descripcion'].'</td>
						</tr>';
				}

			?>
		</table>
	</form>
</div>
	