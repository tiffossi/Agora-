<?php include 'header.php'; ?>
	<div class="fondoPanelAdmin text-center">
		<div class="container">
				<div class="col-lg-4">
				<a href="listarUsuarios.php">
					<div class="tile" id="usuarios">
						<i class="fa fa-user"></i><br>
						<p>Usuarios</p>						
					</div>
				</a>
				</div>
				<div class="col-lg-4">
				<a href="formModificarUsuarios.php">
					<div class="tile" id="obras">
						<i class="fa fa-book"></i><br>
						<p>Obras</p>
					</div>
				</a>
				</div>

				<div class="col-lg-4" >
				<a href="listarLog.php">
					<div class="tile" id="logs">
						<i class="fa fa-group"></i><br>
						<p>Log</p>
					</div>
				</a>
				</div>
		</div>
	</div>

	<div class="fondoAdminView">
		<div class="container">
			<div class="row loadAdmin">
				<div class="text-info text-center">
				  	<p style="font-size: 40px"><strong>Atención.</strong> Esta es la zona de interacción con los botones.</p><br>
					<p style="font-size: 20px">Presione <strong>Usuarios</strong> para consultar y modificar.</p>
					<p style="font-size: 20px">Presione <strong>Obras</strong> para poder modificar.</p>
					<p style="font-size: 20px">Presione <strong>Log</strong> para consultar los LOG de los usuarios.</p>
				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php'; ?>