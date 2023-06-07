<?php 

include("bbdd.php"); 

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Usuarios</title>
	</head>
	<body>
		<div style="display: flex">
			<div style="margin:auto">
				<table class="table" border="1">
					<thead>
						<tr>
							<th scope="col">Id del usuario</th>
							<th scope="col">Usuario</th>
							<th scope="col">Saldo</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$query = mysqli_query($connection,"select * from prueba");
						while($row = mysqli_fetch_array($query)){
					?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['usuario']; ?></td>
							<td><?php echo $row['saldo']; ?></td>
						</tr>
						<?php
						}
						?>
					
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>
