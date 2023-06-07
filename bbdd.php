<?php
	$server = "bbdd:3306";
	$username = "root";
	$password = "abc";
	$database="proyecto";
	$connection = mysqli_connect($server,$username,$password,$database);
	$select_db = mysqli_select_db($connection, $database);
	if(!$select_db){
		echo("Se ha perdido la conexión");
	}
?>
