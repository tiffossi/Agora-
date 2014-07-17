<?php include 'header.php'; ?>

<br>
<br>
<br>

<div class="container">
	<div class="row" id="GestionObras">

		<h3>Gestión de obras <small>Introducir los datos de nuevas obras</small></h3><hr>


		<div class="col-lg-3">
		<!-- Nombres -->
			<div class="panel-group" id="Acordeon">
					<div class="panel panel-default">
					  <div class="panel-heading">
					    <!-- <h3 class="panel-title"><i class="fa fa-chevron-right"></i> <b>Nombres Normalizados</b></h3> -->
					    <h3 class="panel-title">
					    	<a data-toggle="collapse" data-parent="#Acordeon" href="#collapseOne"><i class="fa fa-chevron-right"></i> <b>Nombres Normalizados</b></a>
					    </h3>
					  </div>
					  <div class="panel-collapse collapse" id="collapseOne">
					  <div class="panel-body">
					    <p>Los nombres normalizados sirven para identificar de forma única a un autor, ya que muchos
					    usan pseudonimos y puede llevar a confusión.</p>

					    <a href="formAnadirnNombre.php" class="btn loadObras">Añadir nombre normalizado</a>

					  </div>
					  </div>
					</div>
				<!-- Titulos -->
					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">
							<a data-toggle="collapse" data-parent="#Acordeon" href="#collapseTwo"><i class="fa fa-chevron-right"></i><b> Títulos Normalizados</b></a>
					    </h3>
					  </div>
					<div class="panel-collapse collapse" id="collapseTwo">
					  <div class="panel-body">
					    <p>Los títulos normalizados son necesarios para asociar una obra con su título original.</p>

					    <a href="formAnadirTitulo.php" class="btn loadObras">Añadir título normalizado</a>

					  </div>
					</div>
					</div>
				<!-- Obras -->
					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">
							<a data-toggle="collapse" data-parent="#Acordeon" href="#collapseTree"><i class="fa fa-chevron-right"></i> <b>Obras</b></a>
					    </h3>
					  </div>
					<div class="panel-collapse collapse" id="collapseTree">
					  <div class="panel-body">
					    <p>Mendiante el siguiente formulario podrá añadir obras nuevas a la base de datos.
					    Para poder añadir las obras de forma correcta, antes deberá añadir (en caso de que no existan)
					    Un <b>título normalizado</b> para la obra y un <b>nombre normalizado</b> para el autor.</p>

					    <a href="formAnadirObra.php" class="btn loadObras">Añadir obra</a>

					  </div>
					</div>
					</div>
					<!-- Roles -->
					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">
					    	<a data-toggle="collapse" data-parent="#Acordeon" href="#collapseFour"><i class="fa fa-chevron-right"></i> <b>Roles</b></a>
					    </h3>
					  </div>
					<div class="panel-collapse collapse" id="collapseFour">
					  <div class="panel-body">
					    <p>Mendiante el siguiente formulario podrá añadir obras nuevas a la base de datos.
					    Para poder añadir las obras de forma correcta, antes deberá añadir (en caso de que no existan)
					    Un <b>título normalizado</b> para la obra y un <b>nombre normalizado</b> para el autor.</p>

					    <a href="formAnadirRol.php" class="btn loadObras">Añadir Rol</a>

					  </div>
					</div>
					</div>
					<!-- Responsabilidades -->
					<div class="panel panel-default">
					  <div class="panel-heading">
					    <h3 class="panel-title">
					    	<a data-toggle="collapse" data-parent="#Acordeon" href="#collapseFive"><i class="fa fa-chevron-right"></i> <b>Responsabilidades</b></a>
					    </h3>
					  </div>
					<div class="panel-collapse collapse" id="collapseFive">
					  <div class="panel-body">
					    <p>Mendiante el siguiente formulario podrá añadir obras nuevas a la base de datos.
					    Para poder añadir las obras de forma correcta, antes deberá añadir (en caso de que no existan)
					    Un <b>título normalizado</b> para la obra y un <b>nombre normalizado</b> para el autor.</p>

					    <a href="formAnadirResp.php" class="btn loadObras">Añadir Responsabilidad</a>

					  </div>
					</div>
					</div>
			</div>
		</div>

		<div class="col-lg-9" id="insertaAjax">
			<div class="well well-lg" id="cuadro1">
				<h3> Opción de relleno: </h3>				
			</div>
			<div class="well well-lg" id="cuadro2">
				<h3> - Tabla con los últimos añadidos.</h3>				
			</div>
			<div class="well well-lg" id="cuadro3">
				<h3> - Gráfica estadística de algún dato interesante.</h3>				
			</div>
			<div class="well well-lg" id="cuadro4">
				<h3> - Carrusel con información de cómo rellenar los campos.</h3>				
			</div>
		</div>

	</div>
</div>



<?php include 'footer.php'; ?>