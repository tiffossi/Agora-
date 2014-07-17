
<?php  
include '/functions/functions_bbdd.php'; //  conexion + seleccion de BBDD

crear_conexion();

$consulta = "SELECT id_usuario , nombre_usuario , nombre , apellido1 , apellido2 , email , fecha_nacimiento , fecha_ingreso , permiso FROM usuarios";
$resultado = mysql_query($consulta , $conexion);
echo "
	<table class='table table-striped' width=100%>
	<tr>
	<td><b>ID usuario</b></td>
	<td><b>Nombre de usuario</b></td>
	<td><b>Nombre</b></td>
	<td><b>Apellido1</b></td>
	<td><b>Apellido2</b></td>
	<td><b>E-mail</b></td>
	<td><b>Fecha de Nacimiento</b></td>
	<td><b>Fecha de ingreso</b></td>
	<td><b>Permiso</b></td>
	<td></td>
	</tr>
	";


while($fila = mysql_fetch_array($resultado))
{
   $idUser = $fila['id_usuario'];
   $userName = $fila['nombre_usuario'];
   $name = $fila['nombre'];
   $apelli1 = $fila['apellido1'];
   $apelli2 = $fila['apellido2'];
   $email = $fila['email'];
   $fechaNac = $fila['fecha_nacimiento'];
   $fechaIng = $fila['fecha_ingreso'];
   $permiso = $fila ['permiso'];


	echo "<tr><td>$idUser</td><td>$userName</td><td>$name</td><td>$apelli1</td><td>$apelli2</td>
		 <td>$email</td><td>$fechaNac</td><td>$fechaIng</td><td>$permiso</td>
	<td><a href='formModificarUsuarios.php?id_usuario=$idUser&nombre_usuario=$userName&nombre=$name&apellido1=$apelli1&apellido2=$apelli2&email=$email&fecha_nacimiento=$fechaNac&fecha_ingreso=$fechaIng&permiso=$permiso'>Modificar</a></td></tr>";
	
}
echo"</table>";
?>
