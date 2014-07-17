<?php 

include '/functions/functions_bbdd.php';

crear_conexion();
session_start();


$tituloNorm = $_POST["tituloNorm"];

$cons ="SELECT tituloNorm FROM tituloNorm WHERE tituloNorm ='$tituloNorm'";
$comprobar = mysql_query($cons, $conexion);



if(mysql_num_rows($comprobar) > 0)
{
	header("Location: errorAnadirTitulo.php");

}else{

	mysql_query("INSERT INTO tituloNorm(tituloNorm) VALUES ('".$tituloNorm."')");


	header("Location: correctAnadirTitulo.php");
}


 ?>