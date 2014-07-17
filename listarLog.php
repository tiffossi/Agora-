<?php 
	include '/functions/functions_bbdd.php'; //  conexion + seleccion de BBDD
	crear_conexion();

	$consulta = "SELECT L.id_log, L.id_usuario, U.nombre_usuario, L.fecha, L.accion FROM log as L , usuarios as U WHERE L.id_usuario = U.id_usuario";
	$resultado = mysql_query($consulta, $conexion);

	echo "
	<table class='table table-striped'>
	<tr>
	<td></td>
	<td><b>ID LOG</b></td>
	<td><b>ID USUARIO</b></td>
	<td><b>NOMBRE USUARIO</b></td>
	<td><b>FECHA</b></td>
	<td><b>ACCION</b></td>
	</tr>
	";


	while ($file = mysql_fetch_array($resultado)) {
		echo "<tr>
				<td></td>
				<td>".$file['id_log']."</td>
				<td>".$file['id_usuario']."</td>
				<td>".$file['nombre_usuario']."</td>
				<td>".$file['fecha']."</td>
				<td>".$file['accion']."</td>
			</tr>
			";
	}
	echo"</table>";
 ?>