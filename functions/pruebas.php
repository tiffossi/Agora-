<?php 
	
	include 'dataFields.php';
	echo "campos de obra";
	echo "<select>";
	showCampos('usuarios');
	echo "</select>";
	echo "<br>";

	echo "etiquetas de obra";
	echo "<select>";
	showObraOriginal();
	echo "</select>";
	echo "<br>";

	echo "idByEtiqueta";
	//echo " ".getIdbyField('titulonorm','tituloNorm', 'Lazarillo de tormes');
	echo "<br>";

	echo "titulos Normalizados";
	echo "<select>";
	showTitNorm();
	echo "<option value='caca seca'>Caca seca</option>";
	echo "</select>";
	echo "<br>";

	echo "Nombres Normalizados";
	echo "<select>";
	showNomNorm();
	echo "</select>";
	echo "<br>";

	echo "Nombres Version";
	echo "<select>";
	showNomVers();
	echo "</select>";
	echo "<br>";

	echo "Nombres Rol";
	echo "<select>";
	showNomRol();
	echo "</select>";
	echo "<br>";

	echo "id by tableField<br>";
	echo getIdbyTableField('obra','nombreVersion','Manolitos');
	echo "<br>";



 ?>