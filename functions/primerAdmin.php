<?php 

	function regAdmin($user, $pass, $email,$conexion)
	{

		$consulta = "INSERT INTO usuarios (nombre_usuario,pass,email,permiso)
				VALUES('".$user."','".md5($pass)."','".$email."',1)";

		$resultado 	= mysql_query($consulta, $conexion);

	}

 ?>