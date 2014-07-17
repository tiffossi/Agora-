<!doctype html>
		<html lang="es">
		<head>
			<meta charset="UTF-8">
			<title>Agora Project</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		    <!-- Bootstrap -->
		    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
			<link href="css/main.css" rel="stylesheet" media="screen">
			<link href="css/font-awesome.css" rel="stylesheet">


		</head>
		<body>


	<!-- Header start -->
		<nav  id="agoraHeader" class="navbar navbar-fixed-top" role="navigation">
			
			<a class="navbar-brand" href="index.php" id="LogHead">
               <img src="img/logopeq.png" alt="" >
            </a>

			<div class="container">
			<div class="navbar-left textNav">
				<ul class="nav navbar-nav navbar-center LineaVertical">
				<?php @session_start();

					


					if (@$_SESSION['permiso'] == 1) {
						echo '<li ="activo"><a href="index.php" class="sizeTextNav"><i class="fa fa-home"> Inicio</i></a></li>
						        <li><a href="gestionarObras.php" class="sizeTextNav"><i class="fa fa-folder-open"> &nbsp;Gestión de obras</i></a></li>
						        <li><a href="formNuevaConsulta.php" class="sizeTextNav"><i class="fa fa-table"> &nbsp;Consultas</i></a></li>
						        <li><a href="administrador.php" class="sizeTextNav"><i class="fa fa-gears"> &nbsp;Administración</i></a></li>';	
							
					}
					else if (@$_SESSION['permiso'] == 2) {
						echo '<li ="activo"><a href="index.php" class="sizeTextNav"><i class="fa fa-home"> Inicio</i></a></li>
						        <li><a href="gestionarObras.php" class="sizeTextNav"><i class="fa fa-folder-open"> &nbsp;Gestión de obras</i></a></li>
						        <li><a href="formNuevaConsulta.php" class="sizeTextNav"><i class="fa fa-table"> &nbsp;Consultas</i></a></li>
						      ';
					}
					else
					{
						echo '<li ="activo"><a href="index.php" class="sizeTextNav"><i class="fa fa-home"> Inicio</i></a></li>
						      <li><a href="formNuevaConsulta.php" class="sizeTextNav"><i class="fa fa-table"> &nbsp;Consultas</i></a></li>
						     ';
					}

				?>
				</ul>
			</div>
		<div class="container">
				<div class="navbar-right textNav">
					<ul class="nav navbar-nav navbar-right">

					<?php
						if(!empty($_SESSION['username'])){
							include 'userConfig.php';
						}
						else{
							echo '<button type="button" id="BotonLoginNavbar" class="btn btn-primary navbar-btn" href="#signup" data-toggle="modal" data-target=".bs-modal-sm"><i class="fa fa-user"></i>  Login / Registro </button>';
						}

					?>
	                </ul>
                </div>
		</div>
				
			</div>
		</nav>
	<!-- Header end -->

	
	