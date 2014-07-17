<?php include 'header.php'; echo "<br><br><br><br>";?>
<?php 
	error_reporting(0); //Desactivo todos los errores
	

	include 'functions/functions_bbdd.php'; //  conexion + seleccion de BBDD
	crear_conexion();



	//devuelve el numero de separadores (si es 2, es una relacion)
	function countSep($cadena){
		$token = strtok($cadena, "-");
		$i = 0;

		while ($token != false){
			$token = strtok("-");
			$i++;
		}
		return ($i -1);
	}

	function separeTableFieldR($string, $select){
		
		$token = strtok($string, "-");
		$i = 1;
		$r;

		while ($token != false){
			if($i == $select)
				return $token;

			$token = strtok("-");
			$i++;
		} 
	}


	//recibe una cadena y un selector
	// selector = 1, devuelve la tabla
	// selector = 2, devuelve el campo
	function separeTableField($string, $select){
		
		$token = strtok($string, "-");
		$i = 1;
		$r;

		while ($token != false){
			if($i == $select)
				return $token;

			$token = strtok("-");
			$i++;
		} 
	}
	
	//separeTableField('obra-caca', 2);
	function separeData(){
		global $tablas, $campos, $valores, $relations;
		$i = 0;

		
		foreach ($_POST as $name => $val){
			if(countSep($name) == 1){
				$tablas[] = htmlspecialchars(separeTableField($name, 1));
				$campos[] = htmlspecialchars(separeTableField($name, 2));
				$valores[] = htmlspecialchars($val);
			}
			else{
				$relations[] = separeTableFieldR($name, 1).".".separeTableFieldR($name, 3).
								" = ".separeTableFieldR($name, 2).".".separeTableFieldR($name, 3);
			}
			$i++;
		}

	}

	//devuelve los campos formateados
	function createFieldString($tablas, $campos, $valores){
		global $formatedFields, $formatedValueConstrains,$misCampos;
		$i = 0;

		foreach ($valores as $key => $value) {
			if(empty($value)){
				$formatedFields[] = $tablas[$i].".".$campos[$i];
				$misCampos[] = $campos[$i];
			}
			else{
				$formatedValueConstrains[] = $tablas[$i].".".$campos[$i]."='".$valores[$i]."'";
			}
			$i++;
		}

	}
	//devuelve las tablas formateadas
	function createTableString($tablas){
		global $formatedTables;

		foreach ($tablas as $key => $value) {
			if(!@in_array($value, $formatedTables)){
				$formatedTables[] = $value;
			}
		}
	}

	//relaciones de restriccion
	function createRelationsString($campos, $valores){
		global $formatedRelations;
		$i = 0;

		foreach ($valores as $key => $value) {
			if(!empty($value)){
				$formatedFields[] = $campos[$i];
			}
			$i++;
		}
	}



	//separamos las tablas, campos y valores
	separeData();
	//creamos el arrray con los campos en formato correcto
	createFieldString($tablas, $campos, $valores);
	//creamos el arrray con las tablas en formato correcto
	createTableString($tablas);
	

	//formato final para añadir en la Consulta
	function writeQueryDataString($data, $c){

		$i=0;
		$return;


		foreach ($data as $datos) {
			if($c == 1){
				@$return .= "'".$datos."' ";
			}
			else{
				@$return .= $datos." ";
			}



			if (!($i == (count($data) - 1)))
				$return .= ',';
			
			$i++;
		}
		return $return;
	}

	function writeDataConstrains($data){

		$i=0;
		$r;
		foreach ($data as $datos) {
			
			if (!($i == (count($datos) - 1)))
				$r .= ' AND ';

			@$r .= $datos;
			$i++;
		}

		return $r;
	}

	function writeDataConstrainsR($data){

		$i=0;
		$h = 1;
		@$r;
		foreach ($data as $datos) {
			
			if(($h == 1) && (count(@$formatedValueConstrains) == 0)){
				@$r .= 'AND ';
				$h = 0;
			}

			if (($i == (count($datos)))){
				$r .= ' AND ';
			}
			@$r .= $datos;
			$i++;
		}

		return @$r;
	}




$relationsConstrains = array("ORDER BY nombre ASC");

	
	// $consulta = "SELECT ".writeQueryDataString($formatedFields, 2)
	// 			." FROM ".writeQueryDataString($formatedTables, 2);
	// 			if((!empty($formatedValueConstrains)) OR (!empty($relations))){
	// 				$consulta .=" WHERE ".writeDataConstrains(@$formatedValueConstrains)." ";
	// 			}
	// 			$consulta .= writeDataConstrainsR($relations);

	$consulta = "SELECT ".writeQueryDataString($formatedFields, 2)
				." FROM ".writeQueryDataString($formatedTables, 2);
				if((!empty($formatedValueConstrains)) OR (!empty($relations))){
					$consulta .=" WHERE ";
				}
				$consulta .=writeDataConstrains(@$formatedValueConstrains)." ";
				$consulta .= writeDataConstrainsR($relations);
	


	$c = str_replace(" ","-", $consulta);
	$f = str_replace("WHERE--AND","WHERE", $c);
	$h = str_replace("-"," ", $f);
	echo "<h3>".$h."<br></h3>";

	// echo var_dump($formatedValueConstrains);
	// echo "<br>".var_dump($relations);
	$resultado = mysql_query($h);
	$_SESSION['query'] = $h;

	//Pruebas Manu
	echo '<div class="container mostrarCons">';
	echo '<table class="table table-striped">';
		echo '<thead>';
		echo '<tr>';
		foreach ($misCampos as $cam) {
			echo '<th><b>'.strtoupper($cam).'</b></th>';
		}
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		$par = 0;
		while ($file = mysql_fetch_array($resultado)) {
			
			echo '<tr>';
					//Array_unique es para quitar valores duplicados
			foreach ($file as $mostrarCampos => $value) {
				if($par == 1){
					echo "<td align='center'>";
					if(!empty($value))
						echo $value;
					else{
						echo "-----";
					}

					echo "</td>";
					$par = 2;
				}
				else{
					$par = 1;
				}

			}
			echo '</tr>';
		}
		echo '</tbody>';
	echo '</table>';

	if(!empty($_SESSION['username'])){
		
						
		echo "<div class='col-lg-12'>
			<a href='#' class='btn btn-button pull-right' data-toggle='modal' data-target='#modal-id'>Guardar Consulta</a>
		</div>";
	}
	echo '</div>';

?>
<?php include 'footer.php'; ?>


<div class="modal fade" id="modal-id">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Guardar Consulta</h4>
			</div>
			<form action="functions/saveQuery.php" method="POST" class="form-inline" role="form">
			<div class="modal-body text-center">
					<div class="form-group">
						<label class="control-label" for="nameQ">Nombre de la consulta</label><br>
						<div class="input-group">
							<input type="text" class="form-control" id="nameQ" name="nameQ" placeholder="Nombre de la consulta">				
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-button pull-right">Guardar Consulta</button>
				<!-- <a href="formSaveQuery.php" class="btn btn-button pull-right">Guardar Consulta</a> -->
			</div>
			</form>
		</div>
	</div>
</div>