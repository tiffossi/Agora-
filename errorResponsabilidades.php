<?php  include 'header.php'; ?>
		echo '<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center" id="errorPass">
							<i class="fa fa-thumbs-down fa-2x"></i>
							<h2>ID de la obra ya esta en uso</h2>
							<a href="gestionarObras.php"><button id="botonAnadirTitulo" class="btn btn-info btn-small"> Volver </i></button></a>
						</div>
					</div>
				</div>';

				<?php 
					echo'
						<html>
							<head>
								<meta http-equiv="REFRESH" content="2; url=gestionarObras.php">
							</head>

						</html>
						';
				 ?>

<?php  include 'footer.php';?> 