		<li class="dropdown">
          <a href="#" style="font-size:19px" class="dropdown-toggle sizeTextNav" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo "Bienvenido, ".$_SESSION['username']; ?>&nbsp;<b class="caret"></b></a>
          <ul class="dropdown-menu" id="dropUserConfig">
            <li><a href="formModificarDatos.php"><i class="fa fa-chevron-circle-right"></i>&nbsp;Modificar mis datos</a></li>
            <li><a href="formConsultasGuardadas.php"><i class="fa fa-chevron-circle-right"></i>&nbsp;Consulas guardadas</a></li>
            <li class="divider"></li>
            <li><a href="logout.php" style="text-decoration:none"><i class="fa fa-sign-out"></i>&nbsp;<?php echo $_SESSION['username']; ?>&nbsp;(Logout)</a></li>
          </ul>
        </li>			
	 	
