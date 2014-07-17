<?php include 'headerValidation.php'; ?>


<div class="container" role="main">
<div class="panel panel-default">
	
		<div class="panel-heading"><h2>Asistente de instalación</h2></div>
	  	<div class="panel-body">
	  
	  	<div class="row">
	  		<div class="col-lg-3 col-md-3"></div>
	  		<div class="col-lg-6 col-md-6"> <legend>Datos de conexión</legend> </div>
	  		<div class="col-lg-3 col-md-3"></div>
	  	</div>
		<div class="row">
		
				<div class="col-lg-3 col-md-3"></div>

				<div class="col-lg-6 col-md-6 col-xs-6"> 
					
						<form role="form" method="POST" action="functions/install.php" name="formInstall" id="formInstall">
									<div class="form-group">
										<label for="bbdd_path" class="control-label">Ubicación de la BBDD</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-folder-open"></i></span>
											<input type="text" class="form-control" placeholder="Path" id="bbdd_path" name="bbdd_path">
										</div>
										<span id="miip" class="help block">IP / DNS donde está alojada la base de datos.</span>
									</div>
									
									<div class="form-group">
										<label for="bbdd_user" class="control-label">Usuario</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
											<input type="text" class="form-control" placeholder="Username" id="bbdd_user" name="bbdd_user">
										</div>
										<span class="help block">Usuario que se usará para la conexión con la BBDD.</span>
									</div>
									<div class="form-group">
										<label for="bbdd_pass" class="control-label">Contraseña</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
											<input type="password" class="form-control" placeholder="Password" id="bbdd_pass" name="bbdd_pass">
										</div>
										<span class="help block">Contraseña del usuario que se usará para la conexión con la BBDD.</span>
									</div>
					
				
			
			
									<legend>Datos del administrador</legend>
		
		
					
					
									<div class="form-group">
										<label for="admin_user" class="control-label">Nombre de usuario</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
											<input type="text" class="form-control" placeholder="Username" id="admin_user" name="admin_user">
										</div>
									</div>
									<div class="form-group">
										<label for="admin_pass" class="control-label">Contraseña</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
											<input type="password" class="form-control" placeholder="Password" id="admin_pass" name="admin_pass">
										</div>
									</div>
									<div class="form-group">
										<label for="admin_mail" class="control-label">email</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
											<input type="text" class="form-control" placeholder="Example@mail.com" id="admin_mail" name="admin_mail">
										</div>
									</div>
									<div class="pull-right">
									<br/>
									<input type="submit" class="btn btn-primary" onclick="return validacion()" value="Siguiente&nbsp;&raquo;">
									</div>
							</form>
				
			</div>
				

			<div class="col-lg-3 col-md-3"></div>
		
	

		</div>
	
</div>
</div>


<?php include 'footerValidation.php'; ?>