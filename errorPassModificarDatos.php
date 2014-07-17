<?php  include 'header.php'; ?>
		echo '<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center" id="errorPass">
							<i class="fa fa-thumbs-down fa-2x"></i>
							<h2>Error al introducir el Password anterior</h2>
						</div>
					</div>
				</div>';

				<?php 
					echo'
						<html>
							<head>
								<meta http-equiv="REFRESH" content="2; url=formModificarDatos.php">
							</head>

						</html>
						';
				 ?>

<?php  include 'footer.php';?> 