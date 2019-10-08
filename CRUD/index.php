<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
<?php 

	include 'conexion.php';
	$sql = "select * from table-name";
	$resultado = mysql_query($sql);

 ?>
	<div>
		<table>
			<thead>
				<tr>
					<th>Columna#1</th>
					<th>Columna#2</th>
					<th>Columna#3</th>
					<th>Columna#4</th>
				</tr>
			</thead>
			<tbody>
					<?php 
						while ($filas = mysql_fetch_assoc($resultado)) {
						
					 ?>
				<tr>
					<td><?php echo $filas['Columna#1'] ?></td>
					<td><?php echo $filas['Columna#2'] ?></td>
					<td><?php echo $filas['Columna#3'] ?></td>
					<td>
						<a href="" >editar</a>
						<a href="" >Eliminar</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

</body>
</html>