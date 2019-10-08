<?php 

	$con = mysql_connect("localhost","root","clave");
	mysql_select_db("database_name",$con);
	mysql_query("SET NAME 'UTF8'");	 

 ?>