<?php 
	
	function create_function_bbdd($ip, $user, $pass){


	$cadena = '<?php 

				function crear_conexion(){
				
				global $conexion;

				$bbdd 		= "'.$ip.'";
				$bbdd_user	= "'.$user.'";
				$bbdd_pass	= "'.$pass.'";
				$conexion = mysql_connect($bbdd, $bbdd_user, $bbdd_pass);
				
				if(!$conexion)
					die("No se ha podido conectar a la BBDD").mysql_error();

				mysql_select_db("agora", $conexion);
				}

			 	?>';



		$fp = fopen('functions_bbdd.php', 'w');
		fwrite($fp, $cadena);
		fclose($fp);
	}
 ?>