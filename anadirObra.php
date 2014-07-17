<?php 

	include 'functions/functions_bbdd.php';
	
	crear_conexion();
	session_start();

	//devuelve el id segun el campo que introduzcamos
	function getIdbyField($tabla, $campo, $dato){

		//crear_conexion();
		$consulta = "SELECT * FROM ".$tabla." WHERE ".$campo." = '".$dato."'";
		$resultado = mysql_query($consulta, $GLOBALS['conexion']);
		//echo $consulta;
		while ($rows = mysql_fetch_row($resultado)) {
			$a = $rows[0];
		}
		//mysql_close( $GLOBALS['conexion']);

		return $a;
	}


	

	$idOriginal			= $_POST['idOriginal']; 
	//getIdbyField('titulonorm','tituloNorm', 'Lazarillo de tormes')
	$idTituloNorm 		= getIdbyField('titulonorm','tituloNorm',$_POST['idTitNorm']);
	$etiqueta			= $_POST['etiqueta'];
	$genero				= $_POST['genero'];
	$lengua				= $_POST['lengua'];
	$titulosIncluidos	= $_POST['titulosIncluidos'];
	$nacionalidad		= $_POST['nacionalidad'];
	$comentariosPu		= $_POST['comentariosPublicos'];
	$comentariosPri		= $_POST['comentariosPrivados'];
	$subcatalogo		= $_POST['subcatalogo'];
	$estrenoOrepo		= $_POST['estrenoOreposicion'];
	$clase				= $_POST['clase'];
	$fecha 				= $_POST['fecha'];
	$salaOcanal			= $_POST['salaOcanal'];
	$horaEmision		= $_POST['horaEmision'];
	$ciudad				= $_POST['ciudad'];
	$evento				= $_POST['evento'];
	$fuentesGuion		= $_POST['fuentesGuion'];
	$nroPag				= $_POST['nroPag'];
	$duracion			= $_POST['duracion'];
	$rendimiento		= $_POST['rendimiento'];
	$edicion			= $_POST['edicion'];
	$isbn				= $_POST['isbn'];
	$serieCiclo			= $_POST['serieCiclo'];
	$nroSerie			= $_POST['nroSerie'];
	$tirada				= $_POST['tirada'];
	$precio				= $_POST['precio'];
	$ubicacionCopias	= $_POST['ubicacionCopias'];
	$nroExpediente		= $_POST['nroExpediente'];
	$signAGA			= $_POST['signAGA'];
	$annoExp			= $_POST['annoExp'];
	$fechaEntrada		= $_POST['fechaEntrada'];
	$fechaResolucion	= $_POST['fechaResolucion'];
	$fechaDeposito		= $_POST['fechaDeposito'];
	$calificacionOfi	= $_POST['calificacionOficial'];
	$calificacionMoral	= $_POST['calificacionMoral'];
	$correccionesCens	= $_POST['correccionesCensura'];
	$peticionario		= $_POST['peticionario'];
	$provincia			= $_POST['provincia'];
	$fondosAGA			= $_POST['fondosAGA'];
	$expedRelacionados	= $_POST['expedRelacionados'];
	$usuario			= $_SESSION['user_id'];

	$nombreVersion		= $_SESSION['nombreVersion'];

	$nombreVersion		= $_POST['nombreVersion'];

	$noData				= 'NULL';


	// INSERT INTO `agora`.`obra` (`idObra`, `idObraOriginal`, `idTituloNorm`, `etiqueta`, `genero`, `lengua`, `titulosIncluidos`, `nacionalidad`, `comentariosPublicos`, `comentariosPrivados`, `subcatalogo`, `estrenoOreposicion`, `clase`, `fecha`, `salaOcanal`, `horaEmision`, `ciudad`, `evento`, `fuentesGuion`, `nroPag`, `duracion`, `rendimiento`, `edicion`, `isbn`, `serieCiclo`, `nroSerie`, `tirada`, `precio`, `ubicacionCopias`, `nroExpediente`, `signAGA`, `annoExp`, `fechaEntrada`, `fechaResolucion`, `fechaDeposito`, `calificacionOficial`, `calificacionMoral`, `correccionesCensura`, `peticionario`, `provincia`, `fondosAGA`, `expedRelacionados`, `id_usuario`) VALUES (NULL, '1', '1', 'fadfa', 'fadfas', 'fasfas', 'afsaf', 'fasfas', 'fasf', 'fasfa', 'fasf', '1', 'dasdasd', '2008-12-01', 'sdasdas', '1', 'dasdasd', 'dasd', 'dasdsa', 'dasd', '2', 'dasdasd', 'sds', 'dasdasd', 'dasds', '32', 'dsadas', '123', 'dasdas', 'dsadasd', 'dasdsa', 'dasd', 'dasd', 'dasd', 'dasd', 'dasd', 'dasd', 'dasdas', 'dasd', 'dasd', 'dasdasd', '123', '1');




	$consulta = "INSERT INTO obra (idObra, idObraOriginal, idTituloNorm, etiqueta,
				genero, lengua, titulosIncluidos, nacionalidad, comentariosPublicos,
				comentariosPrivados, subcatalogo, estrenoOreposicion, clase, fecha,
				salaOcanal, horaEmision, ciudad, evento, fuentesGuion, nroPag, duracion,
				rendimiento, edicion, isbn, serieCiclo, nroSerie, tirada, precio, 
				ubicacionCopias, nroExpediente, signAGA, annoExp, fechaEntrada,
				fechaResolucion, fechaDeposito, calificacionOficial, calificacionMoral, correccionesCensura,
				peticionario, provincia, fondosAGA, expedRelacionados, id_usuario, nombreVersion)
				VALUES(	'".$noData."',
						'".$idOriginal."',
						'".$idTituloNorm."', 
						'".$etiqueta."',
						'".$genero."',
						'".$lengua."',
						'".$titulosIncluidos."', 
						'".$nacionalidad."',
						'".$comentariosPu."',
						'".$comentariosPri."',
						'".$subcatalogo."', 
						'".$estrenoOrepo."',
						'".$clase."',
						'".$fecha."',
						'".$salaOcanal."', 
						'".$horaEmision."',
						'".$ciudad."',
						'".$evento."',
						'".$fuentesGuion."', 
						'".$nroPag."',
						'".$duracion."',
						'".$rendimiento."',
						'".$edicion."',
						'".$isbn."', 
						'".$serieCiclo."',
						'".$nroSerie."',
						'".$tirada."',
						'".$precio."',
						'".$ubicacionCopias."',
						'".$nroExpediente."',
						'".$signAGA."',
						'".$annoExp."',
						'".$fechaEntrada."',
						'".$fechaResolucion."',
						'".$fechaDeposito."',
						'".$calificacionOfi."',
						'".$calificacionMoral."',
						'".$correccionesCens."',
						'".$peticionario."',
						'".$provincia."',
						'".$fondosAGA."',
						'".$expedRelacionados."',
						'".$usuario."',
						'".$nombreVersion."')";


	







	echo $consulta;
	$resultado = mysql_query($consulta, $conexion);
	if(!$resultado) header("Location: errorAnadirObra.php");
		
	else header("Location: AnadirObraCorrecto.php");
	mysql_close();







 ?>