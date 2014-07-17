<?php 
	include 'functions_bbdd.php';
	crear_conexion();
	session_start();

	include 'saveQuery.php';
	$_SESSION['query'] = "SELECT * FROM responsabilidades";
	$_SESSION['nameQ'] = "Todas las responsabilidades";
	saveQuery();

 ?>