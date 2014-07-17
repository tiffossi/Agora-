<?php 
include 'header.php';
include 'functions/functions_bbdd.php';
crear_conexion();

$consulta = "SELECT query FROM consultas WHERE idConsulta ='".$_POST['nameQ']."'";
$res = mysql_query($consulta,$conexion);
$file = mysql_fetch_array($res);
$c = $file[0];
echo "<br><br><br>";
//echo $consulta;
//echo "<br><hr><h3>resultado </h3><br>".$c;
$loadQuery = mysql_query($c, $conexion);

echo '<div class="container mostrarCons">';
	echo '<table class="table table-striped bordered">';
		echo '<thead>';
		echo '<tr>';

	$row = mysql_fetch_assoc($loadQuery);

    foreach($row as $key => $value)
    {
        echo "<th><b>".strtoupper($key)."</b></th>";
    }
    echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
	$par = 0;
	//$row = mysql_fetch_array($loadQuery);
	while ($file = mysql_fetch_array($loadQuery)) {
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
echo '</div>';




mysql_close($GLOBALS['conexion']);
include 'footer.php';
?>