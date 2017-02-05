<?php

include 'config.php';
?>
<!--
<script type="text/javascript">
  setTimeout("location.reload()", 1);
</script>
//-->
<table class="table">
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
					<td>'.$registro['id'].'</td>
					<td>'.$registro['picture'].'</td>
					<td>'.$registro['first_name'].'</td>
					<td>'.$registro['rango'].'</td>
					<td>'.$registro['ban'].'</td>
				</tr>';
		}

	?>

</table>