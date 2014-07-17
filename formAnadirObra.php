		<?php include 'functions/dataFields.php'; ?>

		<form role="form" method="POST" action="anadirObra.php" name="anadirObra" id="anadirObra">
			<div class="form-group">
				<label for="nombreVersion" class="control-label">Nombre Version obra </label>
				<input type="text" class="form-control" id="nombreVersion" name="nombreVersion">
			</div>

			<div class="form-group">
				<label for="idTitNorm" class="control-label">Titulo Normalizado </label>
				<select class="form-control" id="idTitNorm" name="idTitNorm">
						<?php showTitNorm();?>
				</select>
			</div>


			<div class="form-group">
				<label for="etiqueta" class="control-label">Etiqueta </label>
				<input type="text" class="form-control" id="etiqueta" name="etiqueta">
			</div>

			<div class="form-group">
				<label for="genero" class="control-label">Género </label>
				<input type="text" class="form-control" id="genero" name="genero">
			</div>

			<div class="form-group">
				<label for="lengua" class="control-label">Lengua </label>
				<input type="text" class="form-control" id="lengua" name="lengua">
			</div>

			<div class="form-group">
				<label for="titulosIncluidos" class="control-label">Títulos Incluidos </label>
				<input type="text" class="form-control" id="titulosIncluidos" name="titulosIncluidos">
			</div>

			<div class="form-group">
				<label for="nacionalidad" class="control-label">Nacionalidad </label>
				<input type="text" class="form-control" id="nacionalidad" name="nacionalidad">
			</div>

			<div class="form-group">
				<label for="comentariosPublicos" class="control-label">Comentarios Públicos </label>
				<input type="text" class="form-control" id="comentariosPublicos" name="comentariosPublicos">
			</div>

			<div class="form-group">
				<label for="comentariosPrivados" class="control-label">Comentarios Privados </label>
				<input type="text" class="form-control" id="comentariosPrivados" name="comentariosPrivados">
			</div>

			<div class="form-group">
				<label for="subcatalogo" class="control-label">Subcatálogo </label>
				<input type="text" class="form-control" id="subcatalogo" name="subcatalogo">
			</div>

			<div class="form-group">
				<label for="estrenoOreposicion" class="control-label">Estreno o Reposición </label>
				<select class="form-control" id="estrenoOreposicion" name="estrenoOreposicion">
					<option value="estreno">Estreno</option>
					<option value="reposicion">Reposición</option>
				</select>
			</div>

			<div class="form-group">
				<label for="clase" class="control-label">Clase </label>
				<input type="text" class="form-control" id="clase" name="clase">
			</div>

			<div class="form-group">
				<label for="fecha" class="control-label">Fecha </label>
				<input type="date" class="form-control" id="fecha" name="fecha">
			</div>

			<div class="form-group">
				<label for="salaOcanal" class="control-label">Sala o Canal </label>
				<input type="text" class="form-control" id="salaOcanal" name="salaOcanal">
			</div>

			<div class="form-group">
				<label for="horaEmision" class="control-label">Hora Emision </label>
				<input type="time" class="form-control" id="horaEmision" name="horaEmision">
			</div>

			<div class="form-group">
				<label for="ciudad" class="control-label">Ciudad </label>
				<input type="text" class="form-control" id="ciudad" name="ciudad">
			</div>

			<div class="form-group">
				<label for="evento" class="control-label">Evento </label>
				<input type="text" class="form-control" id="evento" name="evento">
			</div>

			<div class="form-group">
				<label for="fuentesGuion" class="control-label">Fuentes Guion </label>
				<input type="text" class="form-control" id="fuentesGuion" name="fuentesGuion">
			</div>

			<div class="form-group">
				<label for="nroPag" class="control-label">Número de Páginas </label>
				<input type="number" class="form-control" id="nroPag" name="nroPag">

			<div class="form-group">
				<label for="duracion" class="control-label">Duración </label>
				<input type="text" class="form-control" id="duracion" name="duracion">
			</div>

			<div class="form-group">
				<label for="rendimiento" class="control-label">Rendimiento </label>
				<input type="text" class="form-control" id="rendimiento" name="rendimiento">
			</div>

			<div class="form-group">
				<label for="edicion" class="control-label">Edición </label>
				<input type="text" class="form-control" id="edicion" name="edicion">
			</div>

			<div class="form-group">
				<label for="isbn" class="control-label">ISBN </label>
				<input type="text" class="form-control" id="isbn" name="isbn">
			</div>

			<div class="form-group">
				<label for="serieCiclo" class="control-label">Serie Ciclo </label>
				<input type="text" class="form-control" id="serieCiclo" name="serieCiclo">
			</div>

			<div class="form-group">
				<label for="nroSerie" class="control-label">Número de Serie </label>
				<input type="text" class="form-control" id="nroSerie" name="nroSerie">
			</div>

			<div class="form-group">
				<label for="tirada" class="control-label">Tirada </label>
				<input type="text" class="form-control" id="tirada" name="tirada">
			</div>

			<div class="form-group">
				<label for="precio" class="control-label">Precio </label>
				<input type="text" class="form-control" id="precio" name="precio">
			</div>

			<div class="form-group">
				<label for="ubicacionCopias" class="control-label">Ubicación Copias </label>
				<input type="text" class="form-control" id="ubicacionCopias" name="ubicacionCopias">
			</div>

			<div class="form-group">
				<label for="nroExpediente" class="control-label">Número Expediente </label>
				<input type="text" class="form-control" id="nroExpediente" name="nroExpediente">
			</div>

			<div class="form-group">
				<label for="signAGA" class="control-label">Sign AGA </label>
				<input type="text" class="form-control" id="signAGA" name="signAGA">
			</div>

			<div class="form-group">
				<label for="annoExp" class="control-label">Año Expedición </label>
				<input type="text" class="form-control" id="annoExp" name="annoExp">
			</div>

			<div class="form-group">
				<label for="fechaEntrada" class="control-label">Fecha Entrada </label>
				<input type="date" class="form-control" id="fechaEntrada" name="fechaEntrada">
			</div>

			<div class="form-group">
				<label for="fechaResolucion" class="control-label">Fecha Resolución </label>
				<input type="date" class="form-control" id="fechaResolucion" name="fechaResolucion">
			</div>

			<div class="form-group">
				<label for="fechaDeposito" class="control-label">Fecha Depósito </label>
				<input type="date" class="form-control" id="fechaDeposito" name="fechaDeposito">
			</div>

			<div class="form-group">
				<label for="calificacionOficial" class="control-label">Calificación Oficial </label>
				<input type="text" class="form-control" id="calificacionOficial" name="calificacionOficial">
			</div>

			<div class="form-group">
				<label for="calificacionMoral" class="control-label">Calificación Moral </label>
				<input type="text" class="form-control" id="calificacionMoral" name="calificacionMoral">
			</div>

			<div class="form-group">
				<label for="correccionesCensura" class="control-label">Correcciones Censura </label>
				<input type="text" class="form-control" id="correccionesCensura" name="correccionesCensura">
			</div>

			<div class="form-group">
				<label for="peticionario" class="control-label">Peticionario </label>
				<input type="text" class="form-control" id="peticionario" name="peticionario">
			</div>

			<div class="form-group">
				<label for="provincia" class="control-label">Provincia </label>
				<input type="text" class="form-control" id="provincia" name="provincia">
			</div>

			<div class="form-group">
				<label for="fondosAGA" class="control-label">Fondos AGA </label>
				<input type="text" class="form-control" id="fondosAGA" name="fondosAGA">
			</div>

			<div class="form-group">
				<label for="expedRelacionados" class="control-label">Expedientes Relacionados </label>
				<input type="text" class="form-control" id="expedRelacionados" name="expedRelacionados">
			</div>

			<button id="botonGuardarTitulo" class="btn btn-info btn-small pull-right"><i class="fa fa-check"></i> Guardar</button>
		</form>	
