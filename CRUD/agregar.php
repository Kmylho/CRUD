<div>
	<form>
		<input type="text" name="txtuser"><br>
		<input type="text" name="txtemail"><br>
		<input type="submit" name="" value="Agregar"><br>
		<a href="index.php" >Regresar</a>
	</form>
</div>

<?php 
	
	include 'conexion.php';
	$user = $_GET['txtuser'];
	$email = $_GET['txtemail'];

	$sql = "insert into table-name(Columana#1,Columna#2)values('".$user."','".$email."')";
	mysql_query($sql);
 ?>