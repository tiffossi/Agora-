<?php include 'header.php' ?>
<?php  
include '/functions/functions_bbdd.php'; //  conexion + seleccion de BBDD

crear_conexion();

   echo"<br><br><br>";
   $name = $_POST['nombre'];
   $apelli1 = $_POST['apellido1'];
   $apelli2 = $_POST['apellido2'];
   $email = $_POST['email'];
   $fechaNac = $_POST['fecha_nacimiento'];
   $fechaIng = $_POST['fecha_ingreso'];
   $permiso = $_POST['permiso'];

   $nombreAntiguo = $_POST['NombreOculto'];

   $consulta = "UPDATE usuarios SET nombre = '".$name."' , apellido1 = '".$apelli1."' , apellido2 = '".$apelli2."' , email = '".$email."' , fecha_nacimiento = '".$fechaNac."' , fecha_ingreso = '".$fechaIng."' , permiso = '".$permiso."' WHERE nombre = '".$nombreAntiguo."' ";
   $resultado = mysql_query($consulta , $conexion) or die ("Error al realizar la modificacion".mysql_error());
   mysql_close($conexion);


   echo'
   <html>
      <head>
         <meta http-equiv="REFRESH" content="0; url=administrador.php">
      </head>

   </html>
   ';
    echo"</table>";
?>