<?php 
	include 'functions_bbdd.php';
	crear_conexion();
		session_start();
		$query = htmlspecialchars($_SESSION['query']);
		$nameQ = $_POST['nameQ'];
		$user = $_SESSION['user_id'];
			
		$consulta = "INSERT INTO consultas (id_usuario, nombre, query)
					VALUES ('$user', '$nameQ', ".'"'.$query.'"'.")";


		// echo "<h3>Query:<br>$query</h3>";
		// echo "<h3>Consulta:<br>$consulta</h3>";

		mysql_query($consulta, $GLOBALS['conexion']) or die("No se podido realizar la insercion".mysql_error());
		mysql_close($GLOBALS['conexion']);
	
		header("Location: ../correctSaveQuery.php");
 ?>