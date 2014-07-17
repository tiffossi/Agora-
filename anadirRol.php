<?php 

include '/functions/functions_bbdd.php'; //  conexion + seleccion de BBDD

crear_conexion();
session_start();



$rol= $_POST["rol"];

$compr = "SELECT COUNT(rol) FROM roles WHERE rol = '$rol'";
$resultado1 = mysql_query($compr , $conexion);

$numfila = mysql_result($resultado1 , 0);


if($numfila > 0){
header("Location: ErrorRol.php");
mysql_close();
}


else
{
	$consulta = "INSERT INTO roles (rol) VALUES ('$rol')";
	$resultado = mysql_query($consulta , $conexion) or die("No se podido realizar la insercion".mysql_error());
	header("Location: AnadirRolCorrecto.php");
}


mysql_close($conexion);

// echo'
// <html>
// 	<head>
// 		<meta http-equiv="REFRESH" content="0; url=gestionarObras.php">
// 	</head>

// </html>
// ';

 ?>