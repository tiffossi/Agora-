<?php include 'header.php'; ?>

	
	<form action="registro.php" method="POST">
	<fieldset>
		<label>Usuario</label><input type="text" name="usuario"><br>
		<label>Contraseña</label><input type="password" name="pass"><br>
		<label>Nombre</label><input type="text" name="nombre"><br>
		<label>Apellido 1</label><input type="text" name="apellido1"><br>
		<label>Apellido 2</label><input type="text" name="apellido2"><br>
		<label>Fecha nacimiento</label><input type="date" name="fecha_nacimiento"><br>
		<input type="submit" value="Registrarse">
	</fieldset>
	</form>
	
<?php include 'footer.php'; ?>