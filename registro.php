<?php 
	include 'functions/functions_bbdd.php';
	crear_conexion();

	$fecha 				= date("Y-m-d");
	$usuario			= $_POST['usuario'];
	$nombre				= $_POST['nombre'];
	$apellido1 			= $_POST['apellido1'];
	$apellido2 			= $_POST['apellido2'];
	$pass 				= $_POST['pass'];
	$email				= $_POST['email'];
	$fecha_nacimiento	= $_POST['fecha_nacimiento'];


	$consulta_nombre = "SELECT COUNT(nombre_usuario) FROM usuarios WHERE nombre_usuario = '$usuario'";
	$resultado1 = mysql_query($consulta_nombre , $conexion);

	$numfila = mysql_result($resultado1 , 0);
	
	if($numfila > 0) {
		header("Location: errorRegistro.php");
		mysql_close();
	}
	else
	{
	$consulta = "INSERT INTO usuarios (nombre_usuario, nombre, apellido1, apellido2, pass, email, fecha_nacimiento, fecha_ingreso, permiso)
				VALUES('".$usuario."','".$nombre."', '".$apellido1."','".$apellido2."','".md5($pass)."','".$email."','".$fecha_nacimiento."',
					   '".$fecha."', 2)";

	//echo $consulta;
	$resultado = mysql_query($consulta, $conexion);

	if(!$resultado)
		$mensaje= "Error al crear el usuasrio";
	else
		$mensaje = "Usuario creado correctamente";


	echo $mensaje;
	
	echo "<p><a href='javascript:history.go(-1)'>volver a la pagina principal</a></p>";  

		mysql_close();
		header("Location: RegistroCorrecto.php");
	
	}		

	
 ?>