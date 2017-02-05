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