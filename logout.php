<?php
	include ('functions/functions_bbdd.php');
	include ('functions/functions_log.php');
	crear_conexion();
	session_start();
	write_log("Logout", $_SESSION['user_id'], $conexion);
	echo $_SESSION['user_id']." <br> ".$conexion;
	session_unset();
	session_destroy();
	
	header("Location: index.php");

?>