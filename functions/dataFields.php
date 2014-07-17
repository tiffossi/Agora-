<?php 
	include ('functions_bbdd.php');
		
	//muestra todas las tablas de agora
	function showTablas(){
		crear_conexion();
		$consulta = "SHOW TABLES from agora";
		$resultado = mysql_query($consulta, $GLOBALS['conexion']);
		//echo $consulta;
		while ($rows = mysql_fetch_row($resultado)) {
			if(($rows[0] != 'log') && ($rows[0] != 'usuarios') && ($rows[0] != 'roles') && ($rows[0] != 'consultas'))
				echo "<option value='".$rows[0]."'>".$rows[0]."</option>";
		//log, usuarios, roles, responsabilidades


		}
		mysql_close( $GLOBALS['conexion']);

	}

	function showQueries(){
		crear_conexion();
		$consulta = "SELECT idConsulta, nombre FROM consultas WHERE id_usuario = '".$_SESSION['user_id']."' ORDER BY nombre";
		$resultado = mysql_query($consulta, $GLOBALS['conexion']);
		//echo $consulta;
		while ($rows = mysql_fetch_row($resultado)){
				echo "<option value='".$rows[0]."'>".$rows[1]."</option>";
		//log, usuarios, roles, responsabilidades


		}
		mysql_close( $GLOBALS['conexion']);

	}
	
	//muestra los campos de una tabla en funciona de la tabla que pasemos como parametro
	function showCampos($tableName){

		crear_conexion();
		$consulta = "SHOW COLUMNS FROM ".$tableName;
		$resultado = mysql_query($consulta, $GLOBALS['conexion']);
		//echo $consulta;
		while ($rows = mysql_fetch_row($resultado)) {
			if ($rows[0] != 'id_usuario')
				echo "<option value='".$rows[0]."'>".$rows[0]."</option>";


		}
		mysql_close( $GLOBALS['conexion']);
	}

	//muestra las etiquetas de las obras
	function showObraOriginal(){
		crear_conexion();
		$consulta = "SELECT etiqueta FROM obra ";
		$resultado = mysql_query($consulta, $GLOBALS['conexion']);
		//echo $consulta;
		while ($rows = mysql_fetch_row($resultado)) {
			echo "<option value='".$rows[0]."'>".$rows[0]."</option>";


		}
		mysql_close( $GLOBALS['conexion']);
	}

	
	//muestra todos los titulosNormalizados
	function showTitNorm(){
		crear_conexion();
		$consulta = "SELECT tituloNorm FROM tituloNorm ORDER BY tituloNorm";
		$resultado = mysql_query($consulta, $GLOBALS['conexion']);
		//echo $consulta;
		while ($rows = mysql_fetch_row($resultado)) {
			echo "<option value='".$rows[0]."'>".$rows[0]."</option>";


		}
		mysql_close( $GLOBALS['conexion']);
	}

	//muestra todos los nombres de version
	function showNomVers(){
		crear_conexion();
		$consulta = "SELECT nombreVersion FROM obra ORDER BY nombreVersion";
		$resultado = mysql_query($consulta, $GLOBALS['conexion']);
		//echo $consulta;
		while ($rows = mysql_fetch_row($resultado)) {
			echo "<option value='".$rows[0]."'>".$rows[0]."</option>";


		}
		mysql_close( $GLOBALS['conexion']);
	}

	//muestra todos los nombres de los roles
	function showNomRol(){
		crear_conexion();
		$consulta = "SELECT rol FROM roles ORDER BY rol";
		$resultado = mysql_query($consulta, $GLOBALS['conexion']);
		//echo $consulta;
		while ($rows = mysql_fetch_row($resultado)) {
			echo "<option value='".$rows[0]."'>".$rows[0]."</option>";


		}
		mysql_close( $GLOBALS['conexion']);
	}

	//muestra todos los Nombres normalizados
	function showNomNorm(){
		crear_conexion();
		$consulta = "SELECT nombreNorm FROM nombreNorm ORDER BY nombreNorm";
		$resultado = mysql_query($consulta, $GLOBALS['conexion']);
		//echo $consulta;
		while ($rows = mysql_fetch_row($resultado)) {
			echo "<option value='".$rows[0]."'>".$rows[0]."</option>";


		}
		mysql_close( $GLOBALS['conexion']);
	}

		


	/*
		Aleman
		Ingles
		Frances
		Italiano
		Español
		Catalan
		Portugues
		Holandes
		Sueco
		Rumano
		Polaco
		Griego
		Danes
		Finlandes
		Checo


	*/

 ?>