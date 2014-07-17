<?php 
	include ('functions/functions_bbdd.php');
	include ('functions/functions_log.php');
	crear_conexion();
	session_start();

	$usuario 	= $_POST['usuario'];
	$pass		= $_POST['pass'];

	$consulta = " SELECT pass, nombre_usuario, id_usuario, permiso FROM usuarios
				WHERE nombre_usuario='".$usuario."'
				";
	
	$resultado 	= mysql_query($consulta, $conexion);
	$data		= mysql_fetch_array($resultado);

	//echo "Usuario= ".$usuario." Pass= ".$data[0]."<br><br><hr>";
	if($data[0] == md5($pass)){
		//echo "Logueado con exito";
		$_SESSION['username'] = $usuario;
		$_SESSION['user_id'] = $data[2];
		$_SESSION['permiso'] = $data[3];
		write_log("Logueado", $_SESSION['user_id'], $conexion);

		header("Location: index.php");
	}
	else
	{
		header("Location: errorPassLogin.php");
	}



	mysql_close();

 ?>