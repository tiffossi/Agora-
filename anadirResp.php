<?php 

include '/functions/functions_bbdd.php'; //  conexion + seleccion de BBDD
	
	function getIdbyTableField($tabla, $campo, $valor){
		global $a;
		echo "<br>Valor: ".$valor;
		crear_conexion();
		$consulta = "SELECT * FROM ".$tabla." WHERE ".$campo." = '".$valor."'";
		$resultado = mysql_query($consulta, $GLOBALS['conexion']);
		echo $consulta."<br>";
		while ($rows = mysql_fetch_row($resultado)) {
			$a = $rows[0];
		}
		
		return $a;
	}

crear_conexion();
session_start();

echo var_dump($_POST);

$id_obra = getIdbyTableField('obra','nombreVersion', $_POST['idObra']);
$id_rol = getIdbyTableField('roles','rol',$_POST["idRol"]);
$nombreNorm = getIdbyTableField('nombrenorm','nombreNorm',$_POST["nombreNorm"]);


	$consulta = "INSERT INTO responsabilidades (idObra , NombreNorm , idRol) VALUES ($id_obra , $nombreNorm , $id_rol)";
	echo "<br>".$consulta;
	mysql_query($consulta , $conexion) or die("No se podido realizar la insercion");
	header("Location: AnadirResponsabilidadCorrecto.php");



echo '<br>'.$consulta;

mysql_close($conexion);

// echo'
// <html>
// 	<head>
// 		<meta http-equiv="REFRESH" content="0; url=gestionarObras.php">
// 	</head>

// </html>
// ';

 ?>