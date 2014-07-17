<?php 
include 'header.php';
	include 'functions/functions_bbdd.php'; //  conexion + seleccion de BBDD
	crear_conexion();
	echo "<br><br><br>";
$consulta = "SELECT obra.idObra ,obra.idTituloNorm ,obra.titulosIncluidos ,obra.idObraOriginal ,obra.etiqueta ,obra.lengua ,obra.nacionalidad FROM obra WHERE obra.genero='Accion'";
$resultado = mysql_query($consulta);

	//Pruebas Manu
	echo '<div class="container">';
	echo '<table class="table table-striped" width=100% border="1 solid">';
		echo '<tr><td><b>idObra</b></td><td><b>idTituloNorm</b></td><td><b>titulosIncluidos</b></td><td><b>idObraOriginal</b></td><td><b>etiqueta</b></td><td><b>lengua</b></td><td><b>nacionalidad</b></td></tr>';


		$par = 0;
		
		while ($file = mysql_fetch_array($resultado)) {

			echo '<tr>';
			//Array_unique es para quitar valores duplicados
			foreach($file as $field => $value){
				if($par == 1){
					echo "<td>";
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

	echo '</table>';
	echo '</div>';


include 'footer.php';
 ?>