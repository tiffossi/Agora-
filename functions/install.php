<?php 
	include 'primerAdmin.php';
	include 'create_function_bbdd.php';
	
	$bbdd 		= $_POST['bbdd_path'];
	$bbdd_user	= $_POST['bbdd_user'];
	$bbdd_pass	= $_POST['bbdd_pass'];

	$admin_user = $_POST['admin_user'];
	$admin_pass = $_POST['admin_pass'];
	$admin_mail = $_POST['admin_mail'];
	

	$conexion = mysql_connect($bbdd, $bbdd_user, $bbdd_pass);
	if(!$conexion)
		die("No se ha podido conectar a la BBDD").mysql_error();

	// CREAR BBDD

	$consulta = "CREATE DATABASE agora";
	$resultado = mysql_query($consulta, $conexion);
	if($resultado){
		echo "Base de datos agora creada<br>";
		mysql_select_db("agora", $conexion);
	}
	else
	{
		die("No se ha podido crear la BBDD Agora").mysql_error();
	}


	// TABLA USUARIOS
	/*------------------------------------------------------------------------------------------------*/
	//permisos 	1 -> admin
	//			2 -> ususario
	$consulta = "CREATE TABLE usuarios
				(
					id_usuario 			int NOT NULL AUTO_INCREMENT,
					nombre_usuario		varchar(20),
					nombre				varchar(20),
					apellido1			varchar(20),
					apellido2			varchar(20),
					pass				varchar(50),
					email				varchar(50),
					fecha_nacimiento	date,
					fecha_ingreso		date,
					permiso				int,
					PRIMARY KEY (id_usuario)
				)";

	$resultado = mysql_query($consulta, $conexion);
	if($resultado)
		echo "Tabla usuarios creada<br>";
	else
		echo "No se pudo crear la tabla usuario<br>";

	/*------------------------------------------------------------------------------------------------*/
	// TABLA LOGs
	$consulta = "CREATE TABLE log
				(
					id_log 			int NOT NULL AUTO_INCREMENT,
					id_usuario		int,
					fecha			datetime,
					accion			varchar(150),
					PRIMARY KEY (id_log),
					FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
				)";

	$resultado = mysql_query($consulta, $conexion);
	if($resultado)
		echo "Tabla log creada<br>";
	else
		echo "No se pudo crear la tabla log<br>";


/*######################################################################################################
*************** Declaracion del repositoria de la Biblioteca digital en la BBDD ************************
######################################################################################################*/


	/*------------------------------------------------------------------------------------------------*/
	//Tabla Titulos normalizados

	$consulta = "CREATE TABLE tituloNorm
				(
					idTituloNorm 			int NOT NULL AUTO_INCREMENT,
					tituloNorm				varchar(40),
					PRIMARY KEY (idTituloNorm)
				)";

	$resultado = mysql_query($consulta, $conexion);
	if($resultado)
		echo "Tabla tituloNorm creada<br>";
	else
		echo "No se pudo crear la tabla tituloNorm<br>";


	/*------------------------------------------------------------------------------------------------*/
	//Tabla Documento

	$consulta = "CREATE TABLE documento
				(
					idDocumento 			int NOT NULL AUTO_INCREMENT,
					multimedia				varchar(100),
					imagenExp				varchar(100),
					PRIMARY KEY (idDocumento)
				)";

	$resultado = mysql_query($consulta, $conexion);
	if ($resultado) {
		echo "Tabla documento creada<br>";
	}
	else
	{
		echo "No se pudo crear la tabla documento<br>";
	}

	/*------------------------------------------------------------------------------------------------*/




	/*------------------------------------------------------------------------------------------------*/
	//Tabla responsabilidades

	$consulta = "CREATE TABLE responsabilidades
				(
					idResp			int NOT NULL AUTO_INCREMENT,
					idObra 			int,	
					nombreNorm		varchar(100),
					idRol			int,
					PRIMARY KEY(idResp,idObra)
				)";

	$resultado = mysql_query($consulta, $conexion);
	if ($resultado) {
		echo "Tabla responsabilidades creada<br>";
	}
	else
	{
		echo "No se pudo crear la tabla responsabilidades<br>";
	}

	/*------------------------------------------------------------------------------------------------*/


	/*------------------------------------------------------------------------------------------------*/
	//Tabla nombreNorm

	$consulta = "CREATE TABLE nombreNorm
				(
					idNombreNorm 	int NOT NULL AUTO_INCREMENT,
					nombreNorm		varchar(100),	
					PRIMARY KEY (idNombreNorm)
				)";

	$resultado = mysql_query($consulta, $conexion);
	if ($resultado) {
		echo "Tabla nombreNorm creada<br>";
	}
	else
	{
		echo "No se pudo crear la tabla nombreNorm<br>";
	}

	/*------------------------------------------------------------------------------------------------*/



	/*------------------------------------------------------------------------------------------------*/
	//Tabla roles

	$consulta = "CREATE TABLE roles
				(
					idRol 	int NOT NULL AUTO_INCREMENT,
					rol		varchar(100),	
					PRIMARY KEY (idRol)
				)";

	$resultado = mysql_query($consulta, $conexion);
	if ($resultado) {
		echo "Tabla roles creada<br>";
	}
	else
	{
		echo "No se pudo crear la tabla roles<br>";
	}

	/*------------------------------------------------------------------------------------------------*/

	//Tabla consultas

	$consulta = "CREATE TABLE consultas
				(
					idConsulta 		int NOT NULL AUTO_INCREMENT,
					id_usuario		int,
					nombre			varchar(50),
					query			varchar(1000),	
					PRIMARY KEY (idConsulta),
					FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
				)";

	$resultado = mysql_query($consulta, $conexion);
	if ($resultado) {
		echo "Tabla roles creada<br>";
	}
	else
	{
		echo "No se pudo crear la tabla roles<br>";
	}

	/*------------------------------------------------------------------------------------------------*/

	/*------------------------------------------------------------------------------------------------*/
	//Tabla obra

	$consulta = "CREATE TABLE obra
				(
					idObra 				int NOT NULL AUTO_INCREMENT,
					idObraOriginal		int,
					idTituloNorm		int,
					etiqueta			varchar(50),	
					genero 				varchar(100),
					lengua 				varchar(50),
					titulosIncluidos 	varchar(150),
					nacionalidad 		varchar(45),
					comentariosPublicos varchar(500),
					comentariosPrivados varchar(500),
					subcatalogo 		varchar(250),
					estrenoOreposicion 	boolean,
					clase 				varchar(45),
					fecha				varchar(10), #fecha de la obra
					salaOcanal			varchar(45),
					horaEmision			varchar(10),
					ciudad				varchar(45),
					evento 				varchar(150),
					fuentesGuion 		varchar(250),# medium text wtf ?
					nroPag 				varchar(10),
					duracion 			int,
					rendimiento 		varchar(100),
					edicion 			varchar(4),
					isbn 				varchar(45),
					serieCiclo 			varchar(45),
					nroSerie 			int,
					tirada 				varchar(45),
					precio 				int,
					ubicacionCopias 	varchar(500),
					nroExpediente 		varchar(50),
					signAGA 			varchar(45),
					annoExp				varchar(4),
					fechaEntrada 		varchar(10),
					fechaResolucion 	varchar(10),
					fechaDeposito		varchar(10),
					calificacionOficial varchar(100),
					calificacionMoral	varchar(100),
					correccionesCensura varchar(50),
					peticionario 		varchar(120),
					provincia 			varchar(60),
					fondosAGA 			varchar(50),
					expedRelacionados	int,
					id_usuario			int,
					nombreVersion		varchar(150),


					PRIMARY KEY (idObra),
					#FOREIGN KEY (idObraOriginal) REFERENCES obra(idObraOriginal),
					FOREIGN KEY (idTituloNorm) REFERENCES tituloNorm(idTituloNorm),
					FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
				)";

	$resultado = mysql_query($consulta, $conexion);
	if ($resultado) {
		echo "Tabla obra creada<br>";

		//Añadir clave reflexiva
		$consulta = "ALTER TABLE ADD FOREIGN KEY (idObraOriginal) REFERENCES obra(idObraOriginal)";
		mysql_query($consulta, $conexion);
	}
	else
	{
		echo "No se pudo crear la tabla obra<br>".mysql_error();
	}


	//Creación de la función "function_bbdd.php"
	create_function_bbdd($bbdd, $bbdd_user, $bbdd_pass);


	/*------------------------------------------------------------------------------------------------*/
	//Registrar admin

	regAdmin($admin_user, $admin_pass, $admin_mail, $conexion);

/*######################################################################################################
*************** Bloqueo de los archivos de instalación ************************
######################################################################################################*/
	chmod('../formInstall.php', 0000);
	echo "Bloqueo del archivo forminstall.php ejecutado satisfactoriamente".'<br>';
	chmod('install.php', 0000);
	echo "Bloqueo del archivo install.php ejecutado satisfactoriamente".'<br>';
	chmod('primerAdmin.php', 0000);
	echo "Bloqueo del archivo primerAdmin.php ejecutado satisfactoriamente".'<br>';


	echo "<br><br><hr>Instalacion completada con exito<hr><br><br>";
	mysql_close();
	header("Location: ../instalacionCompleta.php");
 ?>