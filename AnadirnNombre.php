<?php 

include '/functions/functions_bbdd.php'; //  conexion + seleccion de BBDD

crear_conexion();
session_start();



$nombreNorm= $_POST["nombreNorm"];


$compr = "SELECT COUNT(nombreNorm) FROM nombreNorm WHERE nombreNorm = '$nombreNorm'";
$resultado1 = mysql_query($compr , $conexion);

$numfila = mysql_result($resultado1 , 0);


if($numfila > 0){
header("Location: ErrorAnadirNombreNormalizado.php");
mysql_close();
}

else 
{
	$consulta = "INSERT INTO nombreNorm (nombreNorm) VALUES ('$nombreNorm')";

	$resultado = mysql_query($consulta , $conexion) or die("No se podido realizar la insercion");
	header("Location: AnadirNombreNormalizadoCorrecto.php");
}


mysql_close($conexion);

echo'
<html>
	<head>
		<meta http-equiv="REFRESH" content="0; url=gestionarObras.php">
	</head>

</html>
';

 ?>