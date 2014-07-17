<?php include 'header.php' ?>
<?php  
include '/functions/functions_bbdd.php'; //  conexion + seleccion de BBDD

crear_conexion();

$id_usuario = $_SESSION['user_id'];
$consulta = " SELECT nombre , apellido1 , apellido2 , pass , email FROM usuarios WHERE id_usuario = "."'$id_usuario'";
$resultado = mysql_query($consulta , $conexion);



$fila=mysql_fetch_array($resultado);
$nombre=$fila[0];
$apellido1=$fila[1];
$apellido2=$fila[2];
$pass=$fila[3];
$email=$fila[4];



?>
	<div class="container">
		<div class="row" id="divDatosPersonales">
			<div class="col-lg-7">
				<legend>Perfil de <b><?php echo $nombre ?></b></legend>

				<form action="ModificarDatos.php" method="POST">
					<fieldset>

						<label>Nombre</label> 	           <input class="inputOscuro" type="text" name="nombre_modific" value="<?php echo $nombre ?>" required><br>
						<label>Primer Apellido</label>     <input class="inputOscuro" type="text" name="apellido1_modific" value="<?php echo $apellido1 ?>" required><br>
						<label>Segundo Apellido</label>    <input class="inputOscuro" type="text" name="apellido2_modific" value="<?php echo $apellido2 ?>" required><br>
						<label id="passAnterior">Contraseña Actual</label> 	
						<div class="input-group">   
							<input class="inputOscuro pwd" type="password" name="pass_modific" required>
							<span class="input-group-btn">
					            <button class="inputOscuro btn btn-default reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
					        </span> 
						</div>
						<br>
						<label>Contraseña Nueva</label>	   
						<div class="input-group">
							<input class="inputOscuro pwd2" type="password" name="nuevoPass">
							<span class="input-group-btn">
					            <button class="inputOscuro btn btn-default reveal2" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
					        </span> 
						</div>	
						<br>
						<label>E-mail</label>	  		   <input class="inputOscuro" type="text" name="email_modific" value="<?php echo $email ?>" required><br>
						<button id="botonModificarDatos" class="btn btn-info btn-small"><i class="fa fa-check"></i> Guardar</button>


					</fieldset>
				</form>
			</div>
			<div class="col-lg-5">
				<div class="row">
					<legend>Información de las normas de Usuario</legend>
					<div id="informacionUsuario">
						<h4>Configuración cuenta</h4>
						<p>Ésta es la configuración de tu cuenta. Esta página contiene toda la información critica que te identifica en la página.</p>
					</div><hr>
					<div id="informacionUsuario">
						<h4>Email</h4>
						<p>Debe ser una dirección válida de email.</p>
					</div><hr>
					<div id="informacionUsuario">
						<h4>Contraseña actual</h4>
						<p>Por razones de seguridad, debes introducir tu contraseña (actual) para poder modificar esta información.</p>
					</div><hr>
					<div id="informacionUsuario">
						<h4>Modificaciones</h4>
						<p>Todos los campos introducidos, podran ser modificados en cualquier momento.</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>

<?php include 'footer.php' ?>