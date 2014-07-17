<?php 

	include 'functions_bbdd.php'; //  conexion + seleccion de BBDD
	crear_conexion();

	
	//TODO: Cuando no hay restriccion de valor, siempre se introduce un AND despues del WHERE REVISARLO Y AREGLARLO


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

		echo var_dump($_POST);
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

		echo "tablas<br>";
		echo var_dump($tablas);
		echo "campos<br>";
		echo var_dump($campos);
		echo "valores<br>";
		echo var_dump($valores);
		echo "Relaciones<br>";
		echo var_dump($relations);
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
	echo "FormatedFields<br>";
	echo var_dump($formatedFields);
	echo "FormatedTables<br>";
	echo var_dump($formatedTables);
	echo "formatedValueConstrains<br><hr>";
	echo var_dump($formatedValueConstrains);
	echo "Mis Campos<br>"; //Aqui Consigo las columnas que voy a mostrar en la tabla
	echo var_dump($misCampos);
	echo "<br><hr>".countSep('un-paso-marujafddd');
	

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
				@$r .= ' AND ';
				$h = 0;
			}

			if (!($i == (count($datos) - 1)))
				$r .= ' AND ';

			@$r .= $datos;
			$i++;
		}

		return $r;
	}
	// $campos = array("nombre", "id_obra", "estreno", "idDocumento");
	// $tablas = array("obra","documento");
	//$relations = array("idDocumento = idDocumento");
	$relationsConstrains = array("ORDER BY nombre ASC");

	
	echo "<br><hr><br>";
	$consulta = "SELECT ".writeQueryDataString($formatedFields, 2)
				." FROM ".writeQueryDataString($formatedTables, 2)
				." WHERE ".writeDataConstrains(@$formatedValueConstrains)." ".
				writeDataConstrainsR($relations);


	echo "<h3>".$consulta."<br></h3>";
	$resultado = mysql_query($consulta);


	//Pruebas Manu
	echo '<table class="table table-hover">';
		echo '<tr>';
		foreach ($misCampos as $cam) {
			echo '<td>'.$cam.'</td>';
		}
		echo '</tr>';

		$file = mysql_fetch_array($resultado);
		$arrayCam[] = $file;
		foreach ($arrayCam as $key) {
		 	
			echo '<tr>';
					//Array_unique es para quitar valores duplicados
			foreach (array_unique($key) as $mostrarCampos) {
				echo "<td>".$mostrarCampos."</td>";
			}
			echo '</tr>';
		}

	echo '</table>';
 ?>