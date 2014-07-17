<?php  
include '/functions/functions_bbdd.php'; //  conexion + seleccion de BBDD

crear_conexion();

echo"<br>
<br>
<br>";
   $id_usuario = $_GET['id_usuario'];
   $userName = $_GET['nombre_usuario'];
   $name = $_GET['nombre'];
   $apelli1 = $_GET['apellido1'];
   $apelli2 = $_GET['apellido2'];
   $email = $_GET['email'];
   $fechaNac = $_GET['fecha_nacimiento'];
   $fechaIng = $_GET['fecha_ingreso'];
   $permiso = $_GET['permiso'];

echo "
	<table border = 1 width=100%>
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


	echo"
	<tr><form action='modificarUsuarios.php' method='POST'>
		<td>".$id_usuario."</td>
		<td>".$userName."</td>
		<td><input type='text' name='nombre' value=$name></td>
		<td><input type='text' name='apellido1' value=$apelli1></td>
		<td><input type='text' name='apellido2' value=$apelli2></td>
		<td><input type='text' name='email' value=$email></td>
		<td><input type='date' name='fecha_nacimiento' value=$fechaNac></td>
		<td><input type='date' name='fecha_ingreso' value=$fechaIng></td>
		<td><select  name='permiso'> 
			<option value='1'>1: Administrador</option>
			<option value='2'>2: Usuario</option> 
		</td> 
		<td>
		<input type='hidden' name='NombreOculto' value='$name'>
		<input type='submit' value=Modificar></td>
		</form>
	</tr>
	";

echo"</table>";
	
	
?>