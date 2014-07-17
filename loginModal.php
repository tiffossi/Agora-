<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin" data-toggle="tab">Login</a></li>
              <li class=""><a href="#signup" data-toggle="tab">Registrarse</a></li>
              <li class=""><a href="#why" data-toggle="tab">Información</a></li>
            </ul>
        </div>
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in" id="why">
        <p>
        	Para <b>iniciar sesión</b> se debe escribir correctamente el <b>Nombre de Usuario</b> y la <b>Contraseña</b>.<br><br>
          Para <b>registrarse</b>, hay que tener en cuenta que se debe poner un <b>Nombre de Usuario</b> que se encuentre <b>disponible</b>.
        </p>
        </div>
        <div class="tab-pane fade active in" id="signin">
            <form class="form-horizontal" action="login.php" method="POST">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Nombre de Usuario:</label>
              <div class="controls">
                <input type="text" class="form-control" placeholder="Usuario" name="usuario" required>
              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="passwordinput">Password:</label>
              <div class="controls">
                <div class="input-group">   
                  <input type="password" class="form-control pwdLogin" placeholder="********" name="pass" required>
                  <span class="input-group-btn">
                      <button class="btn btn-default revealLogin" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
                  </span> 
                </div>
              </div>
            </div>

            <!-- Multiple Checkboxes (inline) -->
            <!-- <div class="control-group">
              <label class="control-label" for="rememberme"></label>
              <div class="controls">
                <label class="checkbox inline" for="rememberme-0">
                  <input type="checkbox" name="rememberme" id="rememberme-0" value="Remember me">
                  Remember me
                </label>
              </div>
            </div> -->

            <!-- Button -->

            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
               <button id="BotonModal" class="btn btn-info btn-small"><i class="icon-white fa fa-user"></i> Iniciar sesión</button>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="OlvidarPass"></label>
              <div class="controls">
               <a href="#"><p>¿Ha olvidado su Contraseña?</p></a>
              </div>
            </div>
            </fieldset>
            </form>
        </div>

        <!-- **********************************   Registro   **************************************** -->

        <div class="tab-pane fade" id="signup">
            <form class="form-horizontal" action="registro.php" method="POST">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="email">Email:</label>
              <div class="controls">
                <input id="email" name="email" class="form-control" type="text" placeholder="Ejemplo@email.com" class="input-large" required="">
              </div>
            </div>
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Nombre de Usuario:</label>
              <div class="controls">
                <input id="usuario" name="usuario" class="form-control" type="text" placeholder="Ejemplo" class="input-large" required="">
              </div>
            </div>
            
            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="pass">Password:</label>
              <div class="controls">
                <input id="pass" name="pass" class="form-control" type="password" placeholder="********" class="input-large" required="">
                <em>Mas de 5 caracteres</em>
              </div>
            </div>
            <hr>
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="nombre">Nombre:</label>
              <div class="controls">
                <input id="nombre" class="form-control" name="nombre" type="text" placeholder="Francisco" class="input-large" required="">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="apellido1">Primer Apellido:</label>
              <div class="controls">
                <input id="apellido1" class="form-control" name="apellido1" type="text" placeholder="Perez" class="input-large" required="">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="apellido2">Segundo Apellido:</label>
              <div class="controls">
                <input id="apellido2" class="form-control" name="apellido2" type="text" placeholder="Sanchez" class="input-large" required="">
              </div>
            </div>

             <div class="control-group">
              <label class="control-label" for="fecha_nacimiento">Fecha de nacimiento:</label>
              <div class="controls">
                <input id="fecha_nacimiento" class="form-control" name="fecha_nacimiento" type="date" placeholder="Sanchez" class="input-large" required="">
              </div>
            </div>
  
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="BotonModal" class="btn btn-info btn-small"><i class="icon-white fa fa-user"></i> Enviar</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </center>
      </div>
    </div>
  </div>
</div>