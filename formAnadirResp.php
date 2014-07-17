<?php include 'functions/dataFields.php'; ?>

<form action="anadirResp.php" method="POST">
			<div class="form-group">
			<label for="idObra2" class="control-label">ID</label>
			<select id="idObra2" class="form-control" placeholder="ID de la obra"  name="idObra">
				<?php showNomVers(); ?>
			</select>
			<br>
			<label for="NombreNorm2" class="control-label">Nombre Normalizado</label>
			<select id="NombreNorm2" class="form-control" placeholder="Nombre"  name="nombreNorm">
				<?php showNomNorm(); ?>
			</select>
			</div>
			<label for="idRol2" class="control-label">ID Rol</label>
			<select id="idRol2" class="form-control" placeholder="ID rol"  name="idRol">
				<?php showNomRol(); ?>
			</select><br>
			<button id="botonAnadirResp" class="btn btn-info btn-small pull-right"><i class="fa fa-check"></i>&nbsp;Añadir</button>
			
</form>			
