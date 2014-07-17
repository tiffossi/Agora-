<?php include 'header.php' ?>
<?php  

include '/functions/functions_bbdd.php'; //  conexion + seleccion de BBDD

crear_conexion();

$id_usuario=$_SESSION["user_id"];

$nombre=$_POST["nombre_modific"];
$apellido1=$_POST["apellido1_modific"];
$apellido2=$_POST["apellido2_modific"];
$pass=$_POST["pass_modific"];
$email=$_POST["email_modific"];
$nuevaPass = $_POST["nuevoPass"];


//Compruevo el el pass anterior

$consulta = " SELECT pass FROM usuarios
				WHERE id_usuario ='".$id_usuario."'
				";
	
	$resultado 	= mysql_query($consulta, $conexion);
	$data		= mysql_fetch_array($resultado);

	if($data[0] == md5($pass)){

		if (empty($nuevaPass)) {
			$consulta = "UPDATE usuarios SET nombre = '$nombre' , apellido1 = '$apellido1' , apellido2 = '$apellido2'
						 , email = '$email' where id_usuario = '$id_usuario'";
			
			$resultado = mysql_query($consulta , $conexion) or die("La modificacion no fue realizada".mysql_error());
			header("Location: modificacionDatosCorrecta.php");
		}
		else
		{
			$consulta = "UPDATE usuarios SET nombre = '$nombre' , apellido1 = '$apellido1' , apellido2 = '$apellido2', 
			pass = '".md5($nuevaPass)."' , email = '$email' where id_usuario = '$id_usuario'";
			
			$resultado = mysql_query($consulta , $conexion) or die("La modificacion no fue realizada".mysql_error());
			header("Location: modificacionDatosCorrecta.php");
		}
		
	}
	else
	{
		header("Location: errorPassModificarDatos.php");
	}





mysql_close($conexion);


?>
