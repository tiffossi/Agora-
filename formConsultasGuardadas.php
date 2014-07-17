<?php include 'header.php'; ?>
<br>
<br>
<br>
<br>
<div class="container">
	<div class="row" id="GestionObras">
		<h3>Consultas Guardadas </h3><hr>
	</div>
</div>

<div class="container" id="loadQuery">
<form action="formLoadQuery.php" method="POST" class="form-inline" role="form">

<div class="row">
	<div class="col-lg-4" id="notas">
		<h5>Para mostrar una consulta guardada, primero selecciónala. </h5>
	</div>
	<div class="col-lg-4">
		<br>
		<br>
		<br>
		<br>
		<div class="form-group" id="nameKK">
			<label class="sr-only" for="">Consultas</label>
			<select class="form-control" id="nameQ" name="nameQ">
				<?php include 'functions/dataFields.php'; 
					showQueries();
				?>

			</select>
		</div>	
	</div>
	<div class="col-lg-4"></div>
</div>

	<div class="col-lg-4"></div>
	<div class="col-lg-4"></div>
	<div class="col-lg-4">
		<button type="submit" class="btn btn-buton">Cargar</button>
	</div>
	</form>
</div>


<?php include 'footer.php'; ?>