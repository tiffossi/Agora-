<?php 	include 'functions/dataFields.php'; include 'header.php';
?>


<div class="debajoNav text-center">
	Es necesario seleccionar un campo de la lista
</div>

<div class="fondoClaro">
	<div class="container">
		<div class="row" id="addinput">
			<div class="col-lg-12" style="margin-bottom: 12px">

				<div class="col-lg-6">
				<h4>Consultas</h4>
				<br>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="tabla" class="control-label">Tabla</label>	
							<select class="form-control" name="tabla" id="tabla">
								<option value="inicio">Elija una opción</option>
								<?php showTablas(); ?>
							</select>
						</div> 			
					</div>
					<div class="col-lg-6"  style="border-right: solid 1px #428bca">
						<div class="form-group">
						<label for="campo" class="control-label">Campo</label>
							<select class="form-control" name="campo" id="campo" >
							</select>
						</div>
					</div> 
					<div class="col-lg-12 text-right"  style="border-right: solid 1px #428bca">
						<input type="submit" class="btn btn-button" id="btnNuevaconsulta" value="Añadir Campo">
					</div>
				</div>
				<div class="col-lg-6">
				<h4>Relaciones</h4>
				<br>
					<div class="col-lg-4">
						<div class="form-group">
						<label for="relacionA" class="control-label">Relacion A</label>
							<select class="form-control" name="relacionA" id="relacionA" >
							</select>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group">
						<label for="relacionB" class="control-label">Relacion B</label>
							<select class="form-control" name="relacionB" id="relacionB" >
							</select>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group">
						<label for="relacionR" class="control-label">Campo</label>
							<select class="form-control" name="relacion-R" id="relacion-R" >
							</select>
						</div>
					</div>
					<div class="col-lg-12">
						<input type="submit" class="btn btn-button pull-right" id="añadirRelacion" value="Añadir-Relación">
					</div>
				</div>		
			</div>

			<div class="col-lg-12" style="min-height: 300px; border-top: solid 1px #428bca">
				<form  id="divaddinput" action="mostrarConsulta.php" method="POST" rol="form">
					<div class="col-lg-12" id="Relaciones">
					</div>
					<div class="col-lg-6" id="impar">
					</div>
					<div class="col-lg-6" id="par">
					</div>
					<div class="col-lg-12" id="btnConsultar">
					</div>
				</form>
			</div> 
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>

