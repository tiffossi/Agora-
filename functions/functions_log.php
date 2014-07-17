<?php 
	function write_log($accion, $id_usuario, $conexion){
		//include 'functions_bbdd.php';
		//crear_conexion();
		//session_start();
		$consulta = "INSERT INTO log (id_usuario, fecha, accion)
					VALUES('".$id_usuario."','".date("Y-m-d H:i:s")."'
						,'".$accion."')";

		$resultado 	= mysql_query($consulta, $conexion);
	}

 ?>